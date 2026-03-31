<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $cvFile;
    public $isReply;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $cvFile = null, $isReply = false)
    {
        $this->data = $data;
        $this->cvFile = $cvFile;
        $this->isReply = $isReply;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if ($this->isReply) {
            return new Envelope(
                subject: 'We Received Your Job Application - CareGroove Support Ltd',
            );
        }

        return new Envelope(
            subject: 'New Job Application for ' . $this->data['position'] . ' - ' . $this->data['name'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
            with: [
                'data' => $this->data,
                'isReply' => $this->isReply,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->cvFile && !$this->isReply) {
            $attachments[] = Attachment::fromPath($this->cvFile->getRealPath())
                ->as('cv-' . $this->data['name'] . '.' . $this->cvFile->getClientOriginalExtension())
                ->withMime($this->cvFile->getMimeType());
        }

        return $attachments;
    }
}
