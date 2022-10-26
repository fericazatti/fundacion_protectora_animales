<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// Esta clase creada con Artisan permite estructurar los mails que enviamos
// a traves de una vista de tipo blade.

class FundacionMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public function __construct($nombre)
    {
        $this -> nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.fundacion', ['nombre' => $this-> nombre ]);
    }
}
