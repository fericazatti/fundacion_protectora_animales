<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    <a class="navbar-brand" href="">Fundación</a>
    
    <button type="button" class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}

    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a> {{--<span class="sr-only">(current)</span> --}}
            </li>
            @auth
                <form action="{{route('logout')}}" method="post">
                    @csrf                                        
                    <button type="submit" class="nav-link">Cerrar sesión</button>
                </form>          
                <li class="nav-link">
                    <a class="nav-link" href="{{route("mensajes.index")}}" tabindex="-1" aria-disabled="true">Mensajes</a>
                </li> 
                <li class="nav-link">
                    <a class="nav-link" href="{{route("articulos.index")}}" tabindex="-1" aria-disabled="true">Articulos</a>
                </li>    
                <li class="nav-link">
                    <a class="nav-link" href='#' tabindex="0" aria-disabled="">{{auth()->user()->nik}}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route("login")}}" tabindex="-1" aria-disabled="true">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("register")}}" tabindex="-1" aria-disabled="true">Registrarse</a>
                </li>
            @endauth            
        </ul>
    </div>

</nav>



