<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    /* Argomento che gli passo è quello che sto passando a sendnewmail nel controller */
    public function __construct($formData)
    {
        $this->data = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.sendContactMail');
    }
}
