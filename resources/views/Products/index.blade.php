@extends('layouts.page')
@section('title', 'index products')
@section('content')
{{-- Index para ver todos los productos --}}
<div class="row">
    <div class="col-8">
        <h1>List of Products</h1>
    </div>
    <div class="col-2">
        <a href="" class="btn btn"></a>
    </div>
</div>
<!-- comentario -->
{{-- comentario --}} 
<div class="text-center">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Options</th>
            </tr>
        </thead>
            <tbody>  
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td><img src="{{$product->img}}.png" alt="" class="img-fluid icon"></td>
                    <td>{{$product->name}}</td>
                    {{--<td>{{$product->establishment_id->establishment->id}}</td>--}}
                    <td>{{$product->price}}</td>
                    {{-- <td>{{$product->category_id}}</td> --}}
                    <td>
                        <a href="" class="btn"></a>
                        <a href="{{route('categories.view', ['id'=> $product->id])}}">Ver</a>
                    </td>
                </tr>
                @endforeach 
                
            </tbody>    
        </table>
</div>


@endsection