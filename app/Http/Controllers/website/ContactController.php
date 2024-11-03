<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('aniscs452@gmail.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
