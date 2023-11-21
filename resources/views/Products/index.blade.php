@extends('layouts.app')
@section('title', 'index products')
@section('content')
{{-- Index para ver todos los productos --}}
<div class="row">
    <div class="col-8">
        <h1>Lista de Productos</h1>
    </div>
    <div class="col-2">
        <a href="" class="btn btn"></a>
    </div>
</div>
<!-- comentario -->
{{-- comentario --}} 
@foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->img}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->establishment}}</td>
        <td>{{$product->info}}</td>
        {{-- <td>{{$product->category->category_name}}</td> --}}
        <td>
            <a href="" class="btn"></a>
            <a href="{{route('producs.view')}}">Ver</a>
        </td>
    </tr>
@endforeach 


@endsection