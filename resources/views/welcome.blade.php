<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fundacion animales</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Fundacion protectora de animales</h1>
    </header>
    <section>   
        <img src="{{asset('portada.jpg')}}" alt="">
    </section>
    <section>
        @include('mensajes.create')
    </section>
    <footer>
        <p>San Juan Tec 2022</p>
    </footer>
</body>
</html>