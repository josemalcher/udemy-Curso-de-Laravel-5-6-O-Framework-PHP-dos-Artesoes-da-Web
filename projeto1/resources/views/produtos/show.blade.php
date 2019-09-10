@extends('layout.app')
@section('title', $produto->titulo)
@section('content')
<h1>Produto - {{$produto->titulo}}</h1>
<ul>
  <li><strong>Nome: {{$produto->titulo}}</strong></li>
  <li><strong>Preço: {{$produto->preco}}</strong></li>
  <li><strong>Adicionado em: {{$produto->created_at}}</strong></li>
</ul>
<p>{{$produto->descricao}}</p>
<a href="javascript:history.go(-1)">Voltar</a>
@endsection
