@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Category Name
                </th>
                <th>
                    Editing the Category
                </th>
                <th>
                    Deleteing the Category
                </th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-info btn-xs">Edit
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        </td>
                        <td>
                            <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-danger btn-xs">Delete
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection

