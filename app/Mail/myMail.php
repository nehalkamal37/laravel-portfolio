<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class myMail extends Mailable
{
    use Queueable, SerializesModels;
public $details;
    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details=$details;
    }

    public function build()
    {
        return  $this->subject('hiii')
        ->markdown('emails.my_mail')
        ->with('details',$this->details);
        
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'My Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.test_mail',
            with: ['details' => $this->details],        
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
