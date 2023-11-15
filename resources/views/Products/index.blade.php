@extends('layouts.page')
@section('title', 'index Products')
@section('content')

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
        <td>{{$product->product_id}}</td>
        <td>{{$product->product_img}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->product_price}}</td>
        <td>{{$product->product_establishment}}</td>
        <td>{{$product->product_info}}</td>
        <td>{{$product->category->category_name}}</td>
        <td>
            {{-- Para que te lleve a pagina view --}}
            <a href="" class="btn"></a>
            <a href="{{route('producs.view')}}">Ver</a>
        </td>
    </tr>
@endforeach

@endsection