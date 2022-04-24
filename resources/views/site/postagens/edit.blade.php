@extends('site.base')
@extends('layouts.app')
@section('conteudo')
<p>Este será o formulário de atualização </p>
<form action="{{route('posts.update', ['post' => $postagem->getKey()])}}" method="POST">
    @csrf
    @method('PUT')
    </br>
    <input type="text" id="txt" name="titulo" value="{{$postagem->titulo}}" />

    </br>
    <textarea name="conteudo" id="txt2">{{$postagem->conteudo}}</textarea>
    <input type="submit">
</form>

<form action="{{route('posts.destroy',$postagem->id)}}" method="POST">
    <button type="submit" class="btn btn-block btn-primary">Deletar</button>
    @method('DELETE')
    @csrf
</form>
@endsection