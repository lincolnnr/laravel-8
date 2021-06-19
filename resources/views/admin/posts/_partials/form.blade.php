@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf
<input type="text" name="title" id='title' placeholder="Título" value="{{ $post->title ?? old('title') }}"><br><br>
<input type="file" name="image" id="image"><br><br>
<textarea name="content" id="content" cols="30" rows="10" placeholder="Conteúdo">{{ $post->content ?? old('content') }}</textarea>
<button type="submit">Enviar</button>
