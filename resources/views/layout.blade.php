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
   
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="/">Despensa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class=" me-auto mb-2 mb-lg-0">
                    &nbsp;
                </div>
                <div class="d-flex">
                    <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIS('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIS('contact') ? 'active' : '' }}" href="/contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <!-- Bootstrap -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>