@extends('layouts.page')
@section('title', 'index establishments')
@section('content')
{{-- Index para ver todos los productos --}}
<div class="row">
    <div class="col-8">
        <h1>List of Categories</h1>
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
              <th scope="col">Address</th>
              <th scope="col">Options</th>
            </tr>
        </thead>
            <tbody>  
                @foreach($establishments as $establishment)
                <tr>
                    <th scope="row">{{$establishment->id}}</th>
                    <td><img src="{{$establishment->img}}.png" alt="" class="img-fluid icon"></td>
                    <td>{{$establishment->name}}</td>
                    <td>{{$establishment->address}}</td>
                    <td>
                        <a href="" class="btn"></a>
                        <a href="{{route('categories.view', ['id'=> $establishment->id])}}">Ver</a>
                    </td>
                </tr>
                @endforeach 
                
            </tbody>    
        </table>
</div>


@endsection