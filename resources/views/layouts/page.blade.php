<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avocade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar sticky-sm-top navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LOGO</a>
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <button class="btn btn-dark btn-sm m-1">Ingresar</button>
                </div>
            </div>
        </nav>
        <div class="container-fluid w-50">
            <div id="carouselExampleAutoplaying" class="carousel carousel-fade slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active parent-over">
                    <img src="/backup/img/webp/descuentoHalloween.webp" class=" w-100" alt="...">
                    <button class="btn btn-lg btn-green btn-over-left btn-info btn-banner">Ver oferta</button>
                </div>
                  <div class="carousel-item">
                    <img src="/backup/img/webp/viajeGratis.webp" class=" w-100" alt="...">
                    <button class="btn btn-lg btn-green btn-over-rigth btn-dark btn-banner">Ver oferta</button>  
                </div>
                  <div class="carousel-item">
                    <img src="/backup/img/webp/pizza.webp" class=" w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </header>
    @yield('content')
    <footer class="conteiner-fluid p-5">
        <div class="border-top">
            <div class="row">
                <div class="col-4">
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-facebook"></i>
                </div>
                <div class="col-8">
                    <a href="/">Politica de privacidad</a>
                    <a href="/">Condiciones</a>
                    <a href="/">Politica de privacidad</a>
                </div>
            </div>
            <div class="row">
                <i class="bi bi-c-circle">derechos reservados</i>
            </div>
        </div>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>