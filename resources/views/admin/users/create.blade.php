@extends('layouts.app');

@section('content')
@include('admin.includes.errors')

<div class="card card-default">
    <div class="card-header">
        Create a New User
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">User Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit" >Add New User</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
@endsection