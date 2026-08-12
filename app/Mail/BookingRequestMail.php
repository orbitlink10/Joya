<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingRequestMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public array $fields,
        public ?UploadedFile $photo = null,
        public ?string $replyToAddress = null,
    ) {
    }

    public function build(): self
    {
        $email = $this
            ->subject('New Joya Atelier Booking Request')
            ->view('emails.booking-request')
            ->with([
                'fields' => $this->fields,
            ]);

        if ($this->replyToAddress) {
            $email->replyTo($this->replyToAddress);
        }

        if ($this->photo) {
            $email->attach($this->photo->getRealPath(), [
                'as' => $this->photo->getClientOriginalName(),
                'mime' => $this->photo->getMimeType(),
            ]);
        }

        return $email;
    }
}
