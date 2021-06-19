@extends('admin.layouts.app')
@section('content')
<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Novo</a>

@if (session('message'))
    <p>
        {{ session('message') }}
    </p>
@endif
<form action="{{ route('posts.search') }}" method="POST">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Pesquisar</button>
</form>
@foreach ($posts as $post)
    <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" width='200'>
    <h4>{{ $post->title }}
        [ <a href="{{ route("posts.show", $post->id) }}">Ver</a> | <a href="{{ route("posts.edit", $post->id) }}">Editar</a> ]</h4>
@endforeach

<hr>
@if (isset($filters))
{{ $posts->appends($filters)->links() }}
@else
{{ $posts->links() }}
@endif


@endsection
