<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<title>White Travel</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 0px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Los mejores planes de
                            Popayán en un solo lugar</h6>
                        <h1 class="text-white"><span class="text-primary">Registrate ahora</span> y vive una experiencia
                            única</h1>
                    </div>
                    <p class="text-white">White travel, una pagina web dedicada al turismo de la ciudad de Popayan,
                        su enfoque principal es proporcionarte recomendaciones personalizadas, basadas en tus
                        preferencias y presupuesto.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Sistema de recomendacion
                        </li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Chat boot de ayuda
                        </li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Ofertas especiales
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5" style="background-color: #8d8d8d3f;">
                    <div class="card bg-transparent">
                        <div class="card-header" style="text-align: center; padding: 1.30rem;">
                            <h1 class="h2" style="color:#fff">Iniciar sesión</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('autenticacion') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" id="inputEmail" class="form-control _ge_de_ol"
                                    type="text" placeholder="Correo electrónico" required="" aria-required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="inputPassword" class="form-control _ge_de_ol"
                                    type="text" placeholder="Contraseña" required="" aria-required="true">
                            </div>
                            <div class="checkbox form-group">
                                <div class="form-check" style="color:aliceblue">
                                    <input class="form-check-input" type="checkbox" value="" id="">
                                    <label class="form-check-label " for="">
                                        Recuerdame
                                    </label>
                                </div>
                                <a href="#">Olvido contraseña</a>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Entrar
                                </button>
                            </div>
                        </form>
                        <div class="form-group">
                            <p class="text-black" style="color:rgb(204, 204, 204)">¿No tienes una cuenta?</p>
                            <a href="{{ route('login.register') }}">Regístrate</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="text-center text-white mt-5">
            <p>White Travel© 2024 </p>
            <nav>
                <a href="#">Términos de uso</a>
                <a href="#">Privacidad</a>
                <a href="#">Política de cookies</a>
                <a href="#">Centro de ayuda</a>
            </nav>
        </footer>
    </div>
    </div>
    <!-- Registration End -->

</body>

</html>
