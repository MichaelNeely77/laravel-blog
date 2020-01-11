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
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection

