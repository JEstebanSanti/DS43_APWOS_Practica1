@extends('layouts.page')
@section('content')
<main>
    <section class="container p-0 mt-2 w-30">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img\webp\pizza.webp')}}" class="d-block w-100" alt=".chingosumadre">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/webp/viajeGratis.webp')}}" class="d-block w-100" alt="chingusumadre">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/webp/descuentoHalloween.webp')}}" class="d-block w-100" alt="chingusumadre">
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        </div>
    </section>
    <section class="container text-center p-4 mt-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h1 class="fw-bold">Pide Comida a domicilio Con Avocade!</h1>
            </div>
            <div class="col-md-8 card mb-3 mt-2 border-0">
                <div class="row align-items-center g-0 bg-primary-green">
                    <div class="col-md-4">
                        <div class="card-body text-center ">
                            <h5 class="card-title fw-bolder fs-5">Oferta Del Dia en NTienda</h5>
                            <p class="card-text">Pidele fs-6 NPRODUCTO Ahora por solo</p>
                            <p class="card-text"><small class="text-body-secondary">$120.00</small></p>
                            <a href="" class="btn btn-sm btn-dark">ver mas</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="{{asset('img/webp/rollos.jpg')}}" class="img-fluid rounded-start" alt="sushi">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Cards Section 1-->
    <section class="container mt-2 p-2">
        <div class="row mt-4">
            <h3 class="col-8 col-sm-6 col-md-9 fw-bolder">Populares...</h3>
            <a href="#" class="col-4 col-sm-6 col-md-3 btn btn-md btn-dark fw-bolder">ver todo</a>
        </div>
        <div class="row mt-3">
            <div class="card col-12 col-md-4 col-sm-12 border-0 border-0">
                <a href="">
                    <img src="{{asset('/img/slider/1c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/1c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/1c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <!--- Cards Section 2 -->
    <section class="container mt-2 p-2">
        <div class="row mt-4">
            <h3 class="col-8 col-sm-6 col-md-9 fw-bolder">Los Mas Cerca de ti...</h3>
            <a href="#" class="col-4 col-sm-6 col-md-3 btn btn-md btn-dark fw-bolder">ver todo</a>
        </div>
        <div class="row mt-3">
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/2c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/2c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/2c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <!--- Cards Section 3-->
    <section class="container mt-2 p-2">
        <div class="row mt-4 p-2">
            <h3 class="col-8 col-sm-6 col-md-9 fw-bolder">Los Mas Cerca de ti...</h3>
            <a href="#" class="col-4 col-sm-6 col-md-3 btn btn-md btn-dark fw-bolder">ver todo</a>
        </div>
        <div class="row mt-3">
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/3c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/3c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-4 col-sm-12 border-0">
                <a href="">
                    <img src="{{asset('img/slider/3c.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                        <p class="card-text fs-6">$$$</p>
                        <p class="card-text"><small>30mins</small></p>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <!--- Hero 1-->
    <section class="container mt-5 mb-5">
        <div class="row align-items-center text-center heros">
            <div class="col-12 col-md-4 col-sm-12 p-5">
                <img src="{{asset('img/icon/tacos.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-8 col-sm-12">
                <h2 class="fw-bold">¡Descubre una Experiencia Gastronómica Personalizada!</h2>
                <a href="#" class="btn btn-lg btn-dark fw-bolder mt-3">Crear Cuenta</a>
            </div>
        </div>
    </section>
    <!--- Categorias -->
    <section class="container mt-2 p-2 mb-5">
        <div class="row mt-4">
            <h3 class="col-8 col-sm-6 col-md-9 fw-bolder">Categorias</h3>
            <a href="#" class="col-4 col-sm-6 col-md-3 btn btn-md btn-dark fw-bolder">ver todo</a>
        </div>
        <div class="row mt-5 align-items-center justify-content-evenly">
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-5">
                <a href="#">
                    <img src="{{asset('img/icon/chocolate.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-5">
                <a href="">
                    <img src="{{asset('img/icon/meals.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>

                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-5">
                <a href="">
                    <img src="{{asset('img/icon/tacos.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>

                    </div>
                </a>

            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-5">
                <a href="">
                    <img src="{{asset('img/icon/vaso-de-papel.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>

                    </div>
                </a>

            </div>
        </div>
        <div class="row mt-5 align-items-center justify-content-evenly">
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="#">
                    <img src="{{asset('img/icon/chocolate.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/icon/meals.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/icon/tacos.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>

                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/icon/vaso-de-papel.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--- establecimientos-->
    <section class="container">
        <div class="row mt-4">
            <h3 class="col-8 col-sm-6 col-md-9 fw-bolder">Establecimientos</h3>
            <a href="#" class="col-4 col-sm-6 col-md-3 btn btn-md btn-dark fw-bolder">ver todo</a>
        </div>
        <div class="row justify-content-evenly mt-5 mb-5">
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/establecimientos/cafenio.jpg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/establecimientos/carls.jpeg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/establecimientos/liru.jpeg')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
            <div class="card col-12 col-md-3 col-sm-12 border-0 card-sm mt-3">
                <a href="">
                    <img src="{{asset('img/establecimientos/macdo.png')}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body text-center">
                        <p class="card-title fw-bolder fs-5">NPlatillo</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="border-top">
            <div class="row">
                <div class="col-7 p-4">
                    <a class="navbar-brand fs-3" href="#">
                        <span>avocade</span>
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