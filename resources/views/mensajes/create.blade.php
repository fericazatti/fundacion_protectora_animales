@extends('template/base')
@section('contenido')  

<section>   
    <img src="{{asset('resources/image/portada.jpg')}}" width="250">
</section>

<form action="{{route('mensajes.store')}}" method="POST" class="form form-mensajes">
    
    @csrf
    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control"name="nombre" id="nombre" placeholder="Escriba su nombre y apellido">
    </div>
    <div>
        <label for="mail" class="form-label">Mail de contacto</label>
        <input type="text" class="form-control" name="mail" id="mail" placeholder="Ingrese su mail y nos pondremos en contacto">
    </div>
    <div>
        <p>Mensaje</p>
        <textarea name="texto"  class="form-control" id="mensaje" cols="30" rows="10" placeholder="Escriba su consulta"></textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>

@endsection