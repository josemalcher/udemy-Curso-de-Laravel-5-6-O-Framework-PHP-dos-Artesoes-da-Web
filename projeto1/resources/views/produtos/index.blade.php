@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')
    <h1>Produtos</h1>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-3">
                @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))
                    <img src="{{url('img/produtos/'.md5($produto->id).'.jpg')}}" alt="Imagem produto"
                         class="img-fluid img-thumbnail">
                @endif
                <h4 class="text-center">
                    <a href="{{URL::to('produtos')}}/{{$produto->id}}">{{$produto->titulo}}</a>
                </h4>
                <div class="mb-3">
                    <form method="POST" action="{{action('ProdutosController@destroy',$produto->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{URL::to('produtos/'.$produto->id.'/edit')}}" class="btn btn-primary">Editar</a>
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
