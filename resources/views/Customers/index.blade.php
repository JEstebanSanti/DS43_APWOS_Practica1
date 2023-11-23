@extends('layouts.page')
@section('title', 'index customers')
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
              <th scope="col">Email</th>
              <th scope="col">Phone Number</th>
              <th scope="col">address</th>
            </tr>
        </thead>
            <tbody> 
                @foreach($customers as $customer)
                <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td><img src="{{$customer->img}}.png" alt="" class="img-fluid icon"></td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        <a href="" class="btn"></a>
                        <a href="{{route('customer.view', ['id'=> $customer->id])}}">Ver</a>
                    </td>
                </tr>
                @endforeach  
            </tbody>    
        </table>
</div>


@endsection