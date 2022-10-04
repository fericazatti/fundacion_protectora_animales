<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Ver mensaje</title>
</head>
<body>
    <section>
        <h1>{{$mensaje->nombre}}</h1>
        <h2>Contacto: <b>{{$mensaje->mail}}</b></h2>
        <p>{{$mensaje->texto}}</p>
        <a class="btn btn-success" href="{{route('mensajes.index')}}">Volver</a>
    </section>
</body>
</html>