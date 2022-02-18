<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
   
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light"> 
        <div class="container"> 
            <a class="navbar-brand" href="#"> 
                <img src="img/logo.svg" height="40" class="logo"> 
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbar_main"> 
                <ul class="navbar-nav me-auto"> 
                    <li class="nav-item"> <a class="nav-link {{ request()->routeIS('home') ? 'active' : '' }}" href="{{ route('home') }}"> Principal </a> </li> 
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"> 
                            Productos 
                        </a> 
                        <ul class="dropdown-menu"> 
                            <li> <a class="dropdown-item" href="#"> Congelados </a> </li> 
                            <li> <a class="dropdown-item" href="#"> Refrigerador </a> </li> 
                            <li> <a class="dropdown-item" href="#"> Alacena </a> </li> 
                            <li> <a class="dropdown-item" href="#"> Lavandería </a> </li> 
                        </ul> 
                    </li> 
                    <li class="nav-item"> <a class="nav-link" href="#"> Acerca de </a> </li> 
                    <li class="nav-item"> <a class="nav-link {{ request()->routeIS('contact') ? 'active' : '' }}" href="{{ route('contact') }}"> Contacto </a> </li> 
                </ul> 
                <a href="#" class="ms-md-2 btn btn-outline-dark"> 
                   <i class="fa-solid fa-user me-1"></i>Registrate
                </a> 
                <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="ms-md-2 btn btn-primary"> 
                   <i class="fa-solid fa-cart-shopping"></i> Mi despensa (2) 
                </a> 
            </div> <!-- navbar-collapse end.// --> 
        </div> <!-- container end.// --> 
    </nav>
   
    @yield('content')
    
    <footer class="section-footer bg-primary footer-dark mt-5"> 
        <div class="container"> 
            <section class="footer-main py-5"> 
                <div class="row"> 
                    <aside class="col-lg-4 col-12"> 
                        <article class="me-lg-4 mb-4"> 
                            <h6 class="title">Contact us</h6> 
                            <ul class="list-icon"> 
                                <li class="mb-2"> 
                                    <i class="fa-solid fa-location-pin icon"></i>Mérida, Yucatán, México <br> Fraccionamiento los Héroes, CP 97314 
                                </li> 
                                <li class="mb-2"> 
                                    <i class="fa-solid fa-phone-flip icon"></i> (800) 060-0730, (800) 060-0730 
                                </li> 
                                <li class="mb-2"> 
                                    <i class="fa-solid fa-envelope icon"></i> info@despensadigital.com.mx 
                                </li> 
                            </ul> 
                        </article> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title">Compañia</h6> 
                        <ul class="list-menu mb-4"> 
                            <li> <a href="#"> A cerca de </a> </li> 
                            <li> <a href="#"> Empleos </a> </li> 
                            <li> <a href="#"> Terminos y condiciones </a> </li> 
                            <li> <a href="#"> Mapa del sitio </a> </li> 
                        </ul> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title"> Servicios </h6> 
                        <ul class="list-menu mb-4"> 
                            <li> <a href="#"> Contacto </a> </li> 
                            <li> <a href="#"> Envíos </a> </li> 
                            <li> <a href="#"> Cancelaciones </a> </li> 
                        </ul> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title"> Cuenta </h6> 
                        <ul class="list-menu mb-4"> 
                            <li> <a href="#"> Regístrate </a> </li> 
                            <li> <a href="#"> Iniciar sesión </a> </li> 
                            <li> <a href="#"> Recuperar contraseña </a> </li> 
                        </ul> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title">Redes sociales</h6> 
                        <ul class="list-icon list-menu mb-4"> 
                            <li><a href="#"> <i class="icon fab fa-facebook"></i> Facebook </a></li> 
                            <li><a href="#"> <i class="icon fab fa-twitter"></i> Twitter </a></li> 
                            <li><a href="#"> <i class="icon fab fa-instagram"></i> Instagram </a></li> 
                            <li><a href="#"> <i class="icon fab fa-youtube"></i> Youtube </a></li> 
                        </ul> 
                    </aside> 
                </div> <!-- row end.// --> 
            </section> 
            <hr class="my-0"> 
            <section class="footer-bottom d-flex justify-content-between"> 
                <p class="text-white-50 mb-0"> © 2022 Despensa Digital. Todos los derechos reservados. </p> 
                <div> 
                    <i class="fab fa-lg fa-cc-visa"></i> 
                    <i class="fab fa-lg fa-cc-amex"></i> 
                    <i class="fab fa-lg fa-cc-mastercard"></i> 
                    <i class="fab fa-lg fa-cc-paypal"></i> 
                </div> 
            </section> 
        </div> <!-- container end.// --> 
    </footer>
    
    <!-- Bootstrap -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    
</body>

</html>