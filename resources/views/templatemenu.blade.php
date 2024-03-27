<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid d-flex flex-column">
        <!-- Navbar Start -->
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                    <a href="{{ route('welcome') }}" class="navbar-brand">
                        <h1 class="m-0 text-primary"><span class="text-dark">WHITE</span>TRAVEL</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="{{ route('welcome') }}" class="nav-item nav-link active">Inicio</a>
                            <a href="{{ route('hoteles') }}" class="nav-item nav-link">Hoteles</a>
                            <a href="{{ route('restaurantes') }}" class="nav-item nav-link">Restaurantes</a>
                            <a href="{{ route('sitios') }}" class="nav-item nav-link">Sitios turísticos</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    </div>

    <div class="card-body">
        @section('contenidomenu')
            <!-- Contenido del menu -->
        @show
    </div>

    {{-- Chat bot --}}
    <script>
        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.site/v3/H-2141462-4AB71THSSNBUR1W8/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>

    <!-- Footer -->
    <div class="container-fluid bg-dark text-white py-4 px-sm-7 px-md-5 mt-5">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">White Travel &copy; <a href="#">www.whitetravel.com</a>.Todos
                    los derechos reservados.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Diseñado por <a href="https://htmlcodex.com">SoftLab</a>
                </p>
            </div>
        </div>
    </div>
</body>
