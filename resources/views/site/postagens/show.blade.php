@extends('layouts.app')
@extends('site.base')
@section('conteudo')
<h1>{{$conteudoCarregado->titulo}}</h1><p>{!!$conteudoCarregado->conteudo!!}
<p>Este será o formulário  </p>
<p style="font-size: 60%; text-align: center; line-height: 2 em;">Escrito em {{ $conteudoCarregado->created_at }}</p>
@endsection 