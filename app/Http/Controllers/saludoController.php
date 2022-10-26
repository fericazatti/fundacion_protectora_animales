<?php

namespace App\Http\Controllers;

use App\Helper\enviarMail;
use Illuminate\Http\Request;

class saludoController extends Controller
{
    static function gracias($mensaje)
    {
        enviarMail::saludo($mensaje->nombre, $mensaje->mail, $mensaje->texto);
        return;
    }
}
