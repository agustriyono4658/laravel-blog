@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Accounts</h1>
</div>
<a href="/dashboard/users/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create new user</a>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>No.</th>
            <th>Username</th>
            <th>Name</th>
            <th>Administrator</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    @if ($user->is_admin)
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </td>
                <td>
                    <a href="/dashboard/users/{{ $user->username }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/users/{{ $user->username }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Are you sure to delete this user?')" class="badge bg-danger border-0"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection