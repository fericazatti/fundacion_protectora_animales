<section>
    <form action="{{route('importarArticulos')}}" method="post">
        @csrf
        <label for="file">Importar Archivo</label>
        <input  type="file" name="file" id="file" accept=".xlsx">        <br>
        <button class="btn btn-dark" type="submit">Importar</button>
    </form>
</section>