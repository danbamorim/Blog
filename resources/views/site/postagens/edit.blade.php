@extends('site.base')
@section('conteudo')
<p>Este será o formulário de atualização </p>
<form action="{{route('postagens.update', ['postagen' => $postagen->getKey()])}}" method="POST">
    @csrf
    @method('PUT')
    </br>
    <input type="text" id="txt" name="titulo" value="{{$postagen->titulo}}" />

    </br>
    <textarea name="conteudo" id="txt2">{{$postagen->conteudo}}</textarea>
    <input type="submit">
</form>

<form action="{{route('postagens.destroy',$postagen->id)}}" method="POST">
    <button type="submit" class="btn btn-block btn-primary">Deletar</button>
    @method('DELETE')
    @csrf
</form>
@endsection