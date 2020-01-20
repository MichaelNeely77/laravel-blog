@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-heading">
        Trashed Posts
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Featured Image
                </th>
                <th>
                    Title
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Restore
                </th>
                <th style="text-align: center;">
                    Delete Permanently
                </th>
            </thead>
            <tbody>
                @if ($posts->count() > 0) 
                    @foreach ($posts as $post)
                        <tr>
                        <td><img src="{{ $post->featured }}" alt="{{$post->title}}" width="50" height="50"></td>
                            <td>{{ $post->title }}</td>
                            <td>Edit</td>
                            <td>
                                <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-sm btn-info" style="color: white;">Restore</a>
                            </td>
                            <td>
                                <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Trashed Posts</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection

