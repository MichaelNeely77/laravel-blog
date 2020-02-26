@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-body bg-info">
                <div class="card-title text-center bg-info text-white">
                    <h3>Published Posts</h3>
                </div>
                <div class="card-body">
                    <h1 class="text-white text-center"> {{ $posts_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-danger">
                <div class="card-title  text-center text-white">
                    <h3>Trashed Posts</h3>
                </div>
                <div class="card-body">
                    <h1 class="text-white text-center">{{ $trashed_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-success">
                <div class="card-title bg-success text-center text-white">
                    <h3>Users</h3>
                </div>
                <div class="card-body">
                   <h1 class="text-white text-center"> {{ $users_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-warning">
                <div class="card-title text-center text-white">
                   <h3>Categories</h3>
                </div>
                <div class="card-body">
                    <h1 class="text-white text-center"> {{ $category_count }}</h1>
                </div>
            </div>
        </div>
    </div>    
@endsection
