@extends('layouts.app');

@section('content')
@include('admin.includes.errors')

<div class="card card-default">
    <div class="card-header">
        Edit Blog SEttings
    </div>
    <div class="card-body">
        <form action="{{ route('settings.update') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Site Name</label>
            <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $settings->address}} ">
            </div>

            <div class="form-group">
                <label for="contact_phone">Contact Number</label>
                <input type="text" name="contact_number" class="form-control" value="{{ $settings->contact_number}} ">
            </div>

            <div class="form-group">
                <label for="contact_email">Contact Emai8l</label>
                <input type="email" name="contact_email" class="form-control" value="{{ $settings->contact_email}} ">
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit" >Update Settings</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
@endsection