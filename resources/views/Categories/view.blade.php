@extends('layouts.page')
@section('title', 'view categories')
@section('content')
{{-- 
    
    CREAR UN CARD CON EL  CONTENIDO DEL PRODUCTO SELECciONADo

    
    --}}
    
    {{-- <img src="{{$product->img}}">
    <p>{{$product->name}}</p>
    <p>{{$product->description}}</p> --}}
    <div class="row justify-content-between">
        <div class="col-md-5">
            <img class="img-fluid" src="{{asset("$categories->img")}}" alt="">
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold p-5">{{$categories->name}}</h1>
        </div>
    </div>


@endsection