@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>
<a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create new post</a> 
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>No.</th>
            <th>Title</th>
            <th>Kategori</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)    
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><span data-feather="trash-2"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection