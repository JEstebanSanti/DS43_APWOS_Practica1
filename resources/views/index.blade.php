@extends('layouts.page')
@section('content')
<main>
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
    <section class="container text-center p-4 mt-3">
        <div class="row align-items-center">
            <div class="col-5 w-60">
                <h1 class="fw-bold">Pide Comida a domicilio Con Avocade!</h1>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="row align-items-center rounded-2">
                        <div class="col-md-5">
                            <div class="card-body p-0 card-paint-green">
                                <h5 class="card-title fw-bold">Promoción Halloween</h5>
                                <p class="card-text">Escalofrios te van a dar con las nuevas promociones</p>
                                <button class="btn-sm btn btn-light">Pide Ahora</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="/backup/img/webp/rollos.jpg" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <h3 class="col-10">Populares...</h3>
            <a href="/" class="btn btn-sm btn-dark col-1 m-1">ver todo</a>
        </div>
        <div class="">
            <div id="carouselExample" class="carousel carousel-fade w-50 row justify-content-center align-items-center">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <h3 class="col-10">Cerca de ti...</h3>
            <a href="/" class="btn btn-sm btn-dark col-1 m-1">ver todo</a>
        </div>
        <div class="">
            <div id="carouselExample" class="carousel carousel-fade w-50 ">
                <div class="carousel-inner row justify-content-center align-items-center">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <h3 class="col-10">Lo mas Rapido...</h3>
            <a href="/" class="btn btn-sm btn-dark col-1 m-1">ver todo</a>
        </div>
        <div class="row justify-content-center align-items-center">
            <div id="carouselExample" class="carousel carousel-fade w-50 ">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/pizza-hawaiana.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="/img/slider/cafe.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-tittle">Restaurante</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <h2>Mira nuestras Catergorias...</h2>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/chocolate.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Dulcerias</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/meals.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pollo</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/tacos.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tacos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/vaso-de-papel.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Cafes</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/chocolate.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Dulcerias</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/meals.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pollo</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/tacos.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Tacos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/icon/vaso-de-papel.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Cafes</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-5 p-5">
                <h2>Ya Te registraste ?.....</h2>
                <button class="btn btn-dark btn-lg m-3">Aqui!!</button>
            </div>
            <div class="col-7">
                <img src="/img/regist.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="border-top">
            <div class="row">
                <div class="col-7 p-4">
                    <a class="navbar-brand" href="#">
                        <h1>LOGO</h1>
                    </a>
                </div>
                <div class="col-5 p-4">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="/">
                                        Link-nave
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="/">
                                        Link-nave
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="/">
                                        Link-nave
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="/">
                                        Link-nave
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="/">
                                        Link-nave
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="/">
                                        Link-nave
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection