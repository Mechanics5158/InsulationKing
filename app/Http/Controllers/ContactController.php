<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMessage;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:40'],
            'service' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // 1. Save first so the inquiry is never lost
        $contactMessage = ContactMessage::create($validated);

        // 2. Email the admin. A mail failure is logged but won't break the form.
        try {
            Mail::to(config('mail.admin_notify'))
                ->send(new NewContactMessage($contactMessage));
        } catch (\Throwable $e) {
            report($e); // see storage/logs/laravel.log
        }

        return redirect()
            ->route('contact')
            ->with('status', "Thanks, {$validated['name']} — we've received your request and will be in touch within one business day.");
    }
}