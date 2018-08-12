<?php

namespace EDS_site\Mail;

use EDS_site\Models\Practitioner;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PractitionerList extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $practitioners = [];
    protected $regio;
    protected $type;
    public function __construct($practitioners, $regio, $type)
    {
        $this->practitioners = $practitioners;
        $this->regio = $regio;
        $this->type = $type;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.practitioners')
        ->with([
            'practitioners' => $this->practitioners,
            'regio' => $this->regio,
            'type' => $this->type
        ]);
    }
}
