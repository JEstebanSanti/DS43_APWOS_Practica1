@extends('layouts.page')
@section('title', 'create Products')
@section('content')
{{-- TODO Crear un formulario para la creación de un producto--}}

<div class="row">
    <div class="col8 text-center">
        <img src="" alt="" class="imgfluid">
    </div>
    <div class="col-md-4">
        <form action="POST" action="{{route("product.store")}}">
            @csrf
            <select name="" id="">
                @foreach ($establishments as $establishment)
                <option value="{{$establishment->id}}">{{$establishment->name}}</option>
                @endforeach
            </select>
            <button class="btn btn-lg" type="submit">Create</button>
        </form>
    </div>
</div>
@endsection