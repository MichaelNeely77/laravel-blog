@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-heading">
        Tags
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Tag Name
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody>
                @if ($tags->count() > 0)
                @foreach ($tags as $tag)
                <tr>
                    <td>
                        {{ $tag->tag }}
                    </td>
                    <td>
                        <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-info btn-xs">Edit
                    </a>
                    </td>
                    <td>
                        <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger btn-xs">Delete
                    </a>
                    </td>
                </tr>
                
            @endforeach
                    
                @else   
                    <tr>
                        <th colspan="5" class="text-center">No Tags Yet</th>
                    </tr>
                    
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection

