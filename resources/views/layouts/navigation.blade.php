<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0A2A55;">
        <div class="container-fluid">
            <img src="Icons\logo.svg" alt="logo senapp" class="d-inline-block align-text-top logo2">
            <a class="navbar-brand text-light text-decoration-none logopa" href="#" style="font-size: 30px;">SENAPP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-collapse justify-content-md-between ms-lg-4">
                    <a class="nav-link active" aria-current="page" href="#SobreNosotros">Sobre nosotros</a>
                    <a class="nav-link active" href="#">Inicio</a>
                    <a class="nav-link active" href="admin">Datos</a>

                    @if (Auth::user())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                           
                            
                              <button type="submit" class="btn btn-secondary">Cerrar Sesión</button>
                          {{-- <a href={{route('admin')}}>Panel </a> --}}

                    </form> @else
                    <div>
                        <a href="{{ route('register') }}" class="button">Registrarse</a>
                        <a href="{{ route('login') }}" class="button">Iniciar Sesión</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
