<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.senapp', 'senapp') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <link rel="stylesheet" href="css\style.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

    <script type="text/javascript">
        var baseURL = {
            {
                !!json_decode(url('/')) !!
            }
        }
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0A2A55;">
        <div class="container-fluid">
            <img src="Icons\logo.svg" alt="logo senapp" class="d-inline-block align-text-top logo2">
            <a class="navbar-brand text-light text-decoration-none logopa" href="/" style="font-size: 30px;">SENAPP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-collapse justify-content-md-between ms-lg-4">
                    <a class="nav-link active" href="admin"></a>


                    @if (Auth::user())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <div class="dropdown">
                            <button class="btn btn-outline-light logopa dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="image\avatar.png" alt="logo senapp" class="avatar">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="admin">Datos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <button type="submit" class="btn btn-outline-danger">cerrar sesion</button>
                            </ul>
                        </div>
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
    <script src="{{ asset('js/agenda.js') }}" defer></script>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>