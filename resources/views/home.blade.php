@extends('layouts.app')
{{-- __('Dashboard') --}}
{{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
    </div> --}}
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-4 col-md-4 col-sm-2 p-2 mt-2">
            <div class="card text-center">
                <h5 class="card-header">Title</h5>
                <div class="card-body">
                      <i>icon</i>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 col-sm-2 p-2 mt-2">
            <div class="card text-center">
                <h5 class="card-header">Title</h5>
                <div class="card-body">
                      <i>icon</i>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 col-sm-2 p-2 mt-2">
            <div class="card text-center">
                <h5 class="card-header">Title</h5>
                <div class="card-body">
                      <i>icon</i>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 col-sm-2 p-2 mt-2">
            <div class="card text-center">
                <h5 class="card-header">Title</h5>
                <div class="card-body">
                      <i>icon</i>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 col-sm-2 p-2 mt-2">
            <div class="card text-center">
                <h5 class="card-header">Title</h5>
                <div class="card-body">
                      <i>icon</i>
                </div>
            </div>
        </div>
        <div class="col-4 col-md-4 col-sm-2 p-2 mt-2">
            <div class="card text-center">
                <h5 class="card-header">Title</h5>
                <div class="card-body">
                      <i>icon</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
