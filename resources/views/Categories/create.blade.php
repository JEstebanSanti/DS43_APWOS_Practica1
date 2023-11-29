@extends('layouts.page')
@section('title', 'create categories')
@section('content')
<div class="row">
    <h1 class="col-md-8">New Category</h1>
    <div class="col-md-12">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p class="bold">{{$error}}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col8 text-center">
        <img src="" alt="" class="imgfluid">
    </div>
    <div class="col-md-4">
        <form method="POST" action="{{route('categories.store')}}">
            @csrf
            <label class="form-text" for="name">Name</label>
            <input class="form-control" name="name" placeholder="category name" type="text">
            @if($errors->has('name'))
                @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif
            <button class="btn btn-lg btn-success m-2" type="submit">Create</button>
        </form>
    </div>
</div>
@endsection