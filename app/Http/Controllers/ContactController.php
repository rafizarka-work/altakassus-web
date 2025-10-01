<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        try {
            // Send email
            Mail::send('emails.contact', $validated, function ($message) use ($validated) {
                $message->to(config('mail.from.address'))
                    ->subject('New Contact Form Submission from ' . $validated['name']);
                $message->replyTo($validated['email'], $validated['name']);
            });

            return back()->with('success', __('common.contact.success'));
        } catch (\Exception $e) {
            return back()->with('error', __('common.contact.error'))->withInput();
        }
    }
}
