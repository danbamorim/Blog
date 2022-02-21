@extends('site.base')
@section('conteudo')
<p>Este será o formulário de criação de postagens </p>
<form action="{{route('postagens.store')}}" method="POST">
    @csrf 
    <input type="text" name="titulo"><textarea name="conteudo">título</textarea>
    <input type="submit">
</form>

@endsection