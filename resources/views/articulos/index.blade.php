<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Articulos</title>
</head>
<body>
    <table class="table table-dark">
        <tbody>
            <th>    
                <td>Articulo</td>
                <td>Cantidad</td>
            </th>                
            @foreach ($articulos as $item)
                <tr>
                    <td>{{$item->id}}</td>                
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->stock}}</td>
                </tr>    
            @endforeach                
        </tbody>
    </table>    
    @include('Docs.import_excel') <br>
    @csrf
    <a href="{{route('exportarArticulos')}}">Descargar</a>
    

</body>
</html>

