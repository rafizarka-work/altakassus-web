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
            // Rename 'message' to 'user_message' to avoid conflict with Mail $message variable
            $data = [
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'user_message' => $validated['message'] ?? '',
            ];

            Mail::send('emails.contact', $data, function ($message) use ($validated) {
                $message->to(config('mail.from.address'))
                    ->subject('New Contact Form Submission from ' . $validated['name']);
                $message->replyTo($validated['email'], $validated['name']);
            });

            return back()->with('success', __('common.contact.success'));
        } catch (\Exception $e) {
            return back()->with('error', __('common.contact.error') . ' - ' . $e->getMessage())->withInput();
        }
    }
}
