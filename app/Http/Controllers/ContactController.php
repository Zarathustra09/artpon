<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('guest.contact');
    }

    public function store(Request $request)
    {
        Log::info('Contact form submission started.');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Log::info('Contact form data validated.', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);

        try {
            // Send an email
            Mail::to('joshua.pardo30@gmail.com')->send(new ContactFormMail(
                $request->input('name'),
                $request->input('email'),
                $request->input('message')
            ));
            Log::info('Contact form email sent successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to send contact form email.', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to send your message. Please try again later.');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
