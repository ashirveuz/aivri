<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Question;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $questions = Question::where('status', 1)->get();
        $contact = Contact::first();
        return view('website.contact', compact('contact', 'questions'));
    }
}
