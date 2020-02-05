@extends('layouts.app');

@section('content')
@include('admin.includes.errors')

<div class="card card-default">
    <div class="card-header">
        Create a New Category
    </div>
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit" >Save Category</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
@endsection