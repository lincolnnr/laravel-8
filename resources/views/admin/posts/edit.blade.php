@extends('admin.layouts.app')
@section('content')
<h1>Alterando post {{ $post->title }}</h1>
<form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @include('admin.posts._partials.form')
</form>
@endsection
