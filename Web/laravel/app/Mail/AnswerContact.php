<?php

namespace EDS_site\Mail;

use EDS_site\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AnswerContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $oldMessage;
    protected $answerMessage;

    public function __construct($oldMessage, $answerMessage)
    {
        $this->oldMessage = $oldMessage;
        $this->answerMessage = $answerMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.answercontact')
        ->with([
            'oldMessage' => $this->oldMessage,
            'answerMessage' => $this->answerMessage
        ]);
    }
}
