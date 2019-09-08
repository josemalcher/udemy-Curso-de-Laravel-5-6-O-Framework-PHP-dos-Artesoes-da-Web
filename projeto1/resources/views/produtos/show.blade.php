<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos - {{$produto->titulo}}</title>

</head>
<body>
<h1>Produto - {{$produto->titulo}}</h1>
<ul>
  <li><strong>Nome: {{$produto->titulo}}</strong></li>
  <li><strong>Preço: {{$produto->preco}}</strong></li>
  <li><strong>Adicionado em: {{$produto->created_at}}</strong></li>
</ul>
<p>{{$produto->descricao}}</p>
<a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
