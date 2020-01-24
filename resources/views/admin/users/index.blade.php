@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-heading">
        Users
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Image
                </th>
                <th>
                    Name
                </th>
                <th>
                    Permissions
                </th>
                <th>
                    Trash
                </th>
            </thead>
            <tbody>
                @if ($userss->count() > 0)
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <img src="{{ asset($user->profile->avatar) }}" alt="" width="60px" height="60px" style="border-radius:50%;">
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                Permissions
                            </td>
                            <td>
                                Delete
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><th colspan="5" class="text-center">No Users</th></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
    
@endsection

