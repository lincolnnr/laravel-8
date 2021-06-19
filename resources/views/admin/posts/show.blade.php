@extends('admin.layouts.app')
@section('content')
<h1>Detalhes do post {{ $post->title }}</h1>
<ul>
    <li>
        {{ $post->title }}
    </li>
    <li>
        {{ $post->content }}
    </li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar post {{ $post->title }}</button>
</form>
@endsection
