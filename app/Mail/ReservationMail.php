<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Milon\Barcode\Facades\DNS2DFacade as DNS2D;
use Illuminate\Mail\Mailables\Attachment;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reservation Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {   
        $pathImage = public_path() . '/barcode/reservasi-'. $this->mailData['data']->id . '.png';
        $pathLogo  = public_path() . '/asset/pos.png';
        return new Content(
            view: 'emails.reservation',
            with: [
                'pathImage' => $pathImage,
                'pathLogo' => $pathLogo,
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
        return [
            //  Attachment::fromStorage('public/barcode/reservasi-'. $this->mailData['data']->id . '.png')
            // ->as('ticket.png')
            // ->withMime('image/png')
        ];
    }
}
