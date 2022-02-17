<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Senapp</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0A2A55;">
            <div class="container-fluid">
                <img src="Icons\logo.svg" alt="logo senapp" class="d-inline-block align-text-top logo2">
                <a class="navbar-brand text-light text-decoration-none logopa" href="/" style="font-size: 30px;">SENAPP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav navbar-collapse justify-content-md-between ms-lg-4">
                        <a class="nav-link active" aria-current="page" href="#SobreNosotros">Sobre nosotros</a>
                        <a class="nav-link active" href="#Inicio">Inicio</a>
                        <a class="nav-link active" href="admin">Datos</a>

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
                                    <li><a class="dropdown-item" href="evento">Pedir Control</a></li>
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
    </header>


    <div class="triangulo-equilatero-bottom-left"></div>
    <div>
        <p class="contenido text-center border text-light">facilita la visualizacio<br>de informacion</p>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image\escaniar_qr1.jpg" class="d-block w-100" alt="sin conexion" height="550">
            </div>
            <div class="carousel-item">
                <img src="image\escaniar_qr2.jpg" class="d-block w-100" alt="sin conexion" height="550">
            </div>
            <div class="carousel-item">
                <img src="image\escaniar_qr3.jpg" class="d-block w-100" alt="sin conexion" height="550">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    @if (Auth::user())
    <form id="Inicio" method="POST" action="{{ route('logout') }}">
        @csrf
        <div style="background-color: #091220; padding: 30px;"></div>

        <div style="background-color: #3A4049; padding: 60px;">
            <div class="text-center row" style="margin-left: 200px;margin-right: 200px;">
                <button type="button" onclick="location.href='admin'" class="btn btn-secondary" style="margin-top: 30px;margin-bottom: 10px; padding: 30px;">
                    <img src="Icons\account_circle_white_24dp.svg" alt="logo senapp" class="avatar">
                    Datos
                    <img src="Icons\arrow_forward_ios_white_24dp.svg" alt="">
                </button>

                <button type="button" onclick="location.href='evento'" class="btn btn-secondary" style="margin-top: 10px;margin-bottom: 30px; padding: 30px;">
                    <img src="Icons\medical_services_white_24dp.svg" alt="logo senapp" class="avatar">
                    Pedir Control
                    <img src="Icons\arrow_forward_ios_white_24dp.svg" alt="">
                </button>
            </div>
        </div>
        {{-- <a href={{route('admin')}}>Panel </a> --}}

    </form> @else

    @endif

    <div style="background-color: #091220; padding: 30px;"></div>


    <div id="SobreNosotros" class="container-fluid">
        <div class="row">
            <div class="col-7">
                <h3 style="padding: 0px 130px; margin-top: 30px;">¿QUE ES SENAPP?</h3>
                <p style="padding: 0px 130px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                    literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                    College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                    and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                    Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                    1.10.32.</p>
            </div>
            <div class="col-5">
                <div class="row">
                    <img src="Icons\Star.svg" class="decoration">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-5" style="padding: 0;">

                <img src="Icons\Star.svg" class="decoration2">

            </div>
            <div class="col-7">
                <div>
                    <h3 style="padding: 0px 130px;">MISION</h3>
                    <P style="padding: 0px 130px;">La misión de la aplicación
                        SENAAPP,
                        es dar a la comunidad educativa
                        SENA-CTPI , una forma de fácil
                        acceso a la información personal
                        de cada miembro del CTPI, a
                        través de
                        un código QR.</P>
                </div>
                <div>
                    <h3 style="padding: 0px 130px;">VISION</h3>
                    <P style="padding: 0px 130px;">Nuestra visión es que en el 2023
                        nuestra app, pueda llegar a otras
                        instituciones educativas,
                        diferentes del SENA, para que
                        puedan hacer el uso de ella</P>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


    <footer>
        <div class="container-fluid" style="background-color: #091220;">
            <div class="row text-center text-light">
                <div class="col-md-3">
                    <img src="Icons\QR.svg" alt="">
                </div>

                <div class="vl"></div>

                <div class="col-md-3">
                    <article>
                        <ul>
                            <li>
                                <h6>
                                    <p>Política de Privacidad</p>
                                </h6><br>
                                <h6>
                                    <p>Términos y Condiciones</p>
                                </h6>
                            </li>
                        </ul>
                    </article>
                </div>

                <div class="vl"></div>

                <div class="col-md-3">
                    <ul>
                        <li>
                            <h6>
                                <p>Español</p>
                            </h6><br>
                            <h6>
                                <p>Ingles</p>
                            </h6>
                        </li>
                    </ul>
                    </article>
                </div>

                <div class="vl"></div>

                <div class="col-md-2 ">
                    <article>
                        <ul>
                            <li>
                                <h6>Redes Sociales</h6>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>