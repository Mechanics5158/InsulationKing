<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactMessage $contactMessage)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "New inquiry from {$this->contactMessage->name} — Insulation King",
            replyTo: $this->contactMessage->email
                ? [$this->contactMessage->email]
                : [],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-contact-message',
        );
    }

    public function attachments(): array
    {
        return collect($this->contactMessage->photos ?? [])
            ->map(fn ($path) => Attachment::fromStorageDisk('public', $path))
            ->all();
    }
}