<?php

namespace App\Helper;

use App\Mail\FundacionMail;
use App\Mail\RecibimosTuMensaje;
use Illuminate\Support\Facades\Mail;


class  enviarMail{
    
    static function fundacion($nombre, $destinatario)
    {
        Mail::to($destinatario) -> send(new FundacionMail($nombre));
    }

    static function saludo($mensaje)
    {        
        Mail::to($mensaje['mail'])-> send(new RecibimosTuMensaje($mensaje['nombre'], $mensaje['texto']));
    }
}

?>

