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
        // Honeypot: real visitors never fill this hidden field, bots usually do.
        // Pretend it worked so bots don't learn anything.
        if ($request->filled('website')) {
            return redirect()
                ->route('contact')
                ->with('status', "Thanks — we've received your request.");
        }

        $validated = $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'email', 'max:255'],
            'phone'         => ['required', 'string', 'max:40'],
            'service'       => ['nullable', 'in:roof-insulation,exterior-insulation,waterproofing,nano-coating,not-sure'],
            'building_type' => ['required', 'in:house,commercial,warehouse,other'],
            'location'      => ['required', 'string', 'max:150'],
            'message'       => ['required', 'string', 'max:5000'],
            'photos'        => ['nullable', 'array', 'max:4'],
            'photos.*'      => ['image', 'mimes:jpg,jpeg,png,webp', 'max:8192'],
        ]);

        // Store uploaded photos on the public disk and keep their paths
        $validated['photos'] = collect($request->file('photos', []))
            ->map(fn ($photo) => $photo->store('quote-photos', 'public'))
            ->all();

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