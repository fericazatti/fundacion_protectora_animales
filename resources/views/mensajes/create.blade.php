<form action="{{route('mensajes.store')}}" method="POST" class="form form-mensajes">
    @csrf

    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control"name="nombre" id="nombre">
    </div>
    <div>
        <textarea name="texto"  class="form-control" id="mensaje" cols="30" rows="10">
            Escriba su consulta 
        </textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>