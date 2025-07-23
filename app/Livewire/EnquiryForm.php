<?php

namespace App\Livewire;

use App\Models\Enquiry;
use Livewire\Component;

class EnquiryForm extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:10000',
    ];

    public function submit()
    {
        $this->validate();

        Enquiry::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        session()->flash('message', 'Thank you for your message! We will get back to you soon.');
        $this->dispatch('hideSuccessMessage');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.enquiry-form');
    }
}
