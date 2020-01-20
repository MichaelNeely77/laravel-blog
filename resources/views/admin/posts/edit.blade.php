@extends('layouts.app');

@section('content')

@include('admin.includes.errors')

<div class="card card-default">
    <div class="card-header">
       Edit post {{ $post->title }}
    </div>
    <div class="card-body">
        <form action="{{ route('post.update', ['id' => $post->id ]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value={{ $category->id }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="" cols="5" rows="10" class="form-control">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit" >Update Post</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
@endsection