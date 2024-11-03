<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SupportRequestMessage extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $messageData;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Message $messageData
     */
    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject('Support Request Received')
                    ->view('emails.support.request')
                    ->with([
                        'name' => $this->messageData->name,
                        'email' => $this->messageData->email,
                        'phone' => $this->messageData->phone,
                        'project' => $this->messageData->project,
                        'subject' => $this->messageData->subject,
                        'description' => $this->messageData->description,
                    ]);
    }
}
