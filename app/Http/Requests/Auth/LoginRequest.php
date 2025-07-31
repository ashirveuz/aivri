<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Cache;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $authMethod = $this->input('auth_method');

        if ($authMethod === 'otp') {
            return [
                'mobile' => ['required', 'exists:users,mobile'],
                'otp' => ['required', 'array', 'size:6'],
                'otp.*' => ['required', 'string', 'size:1'],
            ];
        } else {
            return [
                'mobile' => ['required', 'exists:users,mobile'],
                'password' => ['required', 'string'],
            ];
        }
    }

    public function messages()
    {
        return [
            'otp.*.required' => 'OTP is required.',
            'otp.*.size' => 'Each OTP digit must be a single character.',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();
        $authMethod = $this->input('auth_method');

        if ($authMethod === 'otp') {
            $this->validateOtp();
        } else {
            if (! Auth::attempt($this->only('mobile', 'password'), $this->boolean('remember'))) {
                RateLimiter::hit($this->throttleKey());

                throw ValidationException::withMessages([
                    'mobile' => trans('auth.failed'),
                ]);
            }
        }

        RateLimiter::clear($this->throttleKey());
    }

    protected function validateOtp(): void
    {
        $mobileNumber = $this->input('mobile');
        $otp          = $this->input('otp');
        $storedOtp    = Cache::get('otp_' . $mobileNumber);
        $otpExpiresAt = Cache::get('otp_expires_at_' . $mobileNumber);

        if (!$storedOtp || !$otpExpiresAt || $storedOtp != $otp || now()->greaterThan($otpExpiresAt)) {
            throw ValidationException::withMessages([
                'otp' => 'The OTP is invalid or has expired.',
            ]);
        }

        $user = User::where('mobile', $mobileNumber)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'mobile' => 'User not found.',
            ]);
        }

        Auth::login($user);
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'mobile' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('mobile')) . '|' . $this->ip());
    }
}
