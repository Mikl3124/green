<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

     public $prospect;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($prospect)
    {
      $this->prospect = $prospect;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $prospect = $this->prospect;

      return $this->from('mickael@mdiag.fr', 'Mickael de M-Diag')
            ->subject("Nouvelle demande de devis")
            ->view('emails.quote-request');
    }
}
