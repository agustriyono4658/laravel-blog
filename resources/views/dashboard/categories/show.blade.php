@extends('dashboard.layouts.main')

@section('container')
<form action="" method="post">
@method('put')
@csrf
    {{ $category->name }}
    {{ $category->slug }}
</form>
@endsection