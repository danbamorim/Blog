@extends('layouts.app')
@section('content')

<p>Este é um conteúdo dinâmico</p>
</br>
@foreach ($postagens as $postagem)
<h2 style="font-size: 140%; text-align: center; line-height: 2 em; color: #800000 ">{{ $postagem->titulo }}</h2>
</br>
<p style="font-family: FreeMono, monospace; font-size: 120% ; line-height: 2 em;">{{ $postagem->conteudo }}</p>
</br>
<p style="font-size: 60%; text-align: center; line-height: 2 em;">Escrito em {{ $postagem->created_at }}</p>
<hr />

    @endforeach
    @endsection