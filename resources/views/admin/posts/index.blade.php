@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-heading">
        Published Posts
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
                    Trash
                </th>
            </thead>
            <tbody>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <tr>
                            <td><img src="{{ $post->featured }}" alt="{{$post->title}}" width="50" height="50"></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Trash</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><th colspan="5" class="text-center">No Published Posts</th></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection

