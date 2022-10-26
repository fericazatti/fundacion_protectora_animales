<?php

namespace App\Mail;

use App\Models\Mensaje;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecibimosTuMensaje extends Mailable
{
    use Queueable, SerializesModels;
    
    public function __construct($nombre, $mensaje){
        $this -> nombre = $nombre;
        $this -> mensaje = $mensaje;
    }
    
    public function build(){

        return $this->view('mails.saludo',
        [
            'nombre' => $this->nombre,
            'mensaje'=> $this->mensaje
        ]);
        
    }
}
