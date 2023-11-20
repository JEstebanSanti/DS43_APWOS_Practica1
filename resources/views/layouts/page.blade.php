<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avocade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/app.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar sticky-sm-top navbar-expand-lg bg-primary-green h-20">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span>avocade</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex w-100" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark fa-solid fa-magnifying-glass" type="submit"></button>
                    </form>
                    <a href="#" class="btn-ingreso">
                        <i class="fa-solid fa-user p-1"></i>
                        <span class="p-1">Ingreso</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="conteiner-fluid p-5">
        <div class="border-top">
            <div class="row">
                <div class="col-4 p-3 fs-5">
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="col-8 text-center">
                    <a href="/">Politica de privacidad</a>
                    <a href="/">Condiciones</a>
                    <a href="/">Politica de privacidad</a>
                </div>
            </div>
            <div class="row">
                <span class="">
                    <i class="fa-solid fa-copyright"></i>
                    derechos reservados
                </span>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8910688d9c.js" crossorigin="anonymous"></script>
</body>
</html>