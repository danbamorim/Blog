@extends('site.base')
@section('conteudo')
<p>Este será o formulário de criação de postagens </p>
<style>
    textarea {
        width: 50%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
        text-align: center;
    }

    input[type=text]:focus {
        border: 3px solid #555;
        margin: 3px 0;
    }
</style>


<form action="{{route('postagens.store')}}" method="POST">
    @csrf 
    </br> 
    <input type="text" id="txt" name="titulo"/>
    </br>
    <textarea id="txt2" name="conteudo"></textarea>
    <input type="submit">
</form>

@endsection