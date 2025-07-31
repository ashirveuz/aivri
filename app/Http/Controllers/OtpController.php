<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $request->validate([
            'mobile' => 'required|exists:users,mobile',
        ]);

        try {

            $mobileNumber = $request->input('mobile');
            $otp          = rand(100000, 999999);
            $otpCacheKey  = 'otp_' . $mobileNumber;
            $otpExpireAtCacheKey = 'otp_expire_at_' . $mobileNumber;
            $otpDurationInMin    = 1;


            Cache::forget($otpCacheKey);
            Cache::forget($otpExpireAtCacheKey);

            Cache::put($otpCacheKey, $otp, now()->addMinutes($otpDurationInMin));
            Cache::put($otpExpireAtCacheKey, now()->addMinutes($otpDurationInMin), now()->addMinutes($otpDurationInMin));


            info($otpCacheKey . ' : ' . $otp);

            return response()->json([
                'message' => 'OTP sent successfully!',
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Otp sent failed',
            ], 403);
        }
    }

    public function checkOtpStatus(Request $request)
    {
        try {
            $mobileNumber = $request->input('mobile');
            $storedOtp    = Cache::get('otp_' . $mobileNumber);
            $otpExpireAt  = Cache::get('otp_expire_at_' . $mobileNumber);

            if (!$storedOtp || !$otpExpireAt) {
                return response()->json([
                    'message' => 'OTP not found or expired!',
                ], 404);
            }

            $remainingTime = now()->diffInSeconds($otpExpireAt, false);

            if ($remainingTime <= 0) {
                return response()->json([
                    'message' => 'OTP expired!',
                ], 400);
            }


            return response()->json([
                'message' => 'OTP is valid.',
                'remaining_time' => $remainingTime,
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Status checking failed.',
            ], 403);
        }
    }
}
