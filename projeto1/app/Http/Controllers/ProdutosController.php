<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all(); // recebe todos os dados do produto

/*        echo '<pre>';
        print_r($produtos);
        echo '</pre>';*/

    return view('produtos.index', array('produtos' => $produtos));
    }

    public function show($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.show', array('produto' => $produto));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'sku' => 'required|unique:produtos|min:3',
            'titulo' => 'required|min:3',
            'descricao' => 'required|min:10',
            'preco' => 'required|numeric',
            ]
        );

        $produto = new Produtos();
        $produto->sku = $request->input('sku');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        if ($produto->save()){
            return redirect('produtos/create')->with('success','Produto cadastrado com sucesso');
        }
    }
    public function edit($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.edit', compact('produto','id'));
    }

    public function update(Request $request, $id)
    {
        $produto = Produtos::find($id);
        $this->validate($request,[
                'sku' => 'required|min:3',
                'titulo' => 'required|min:3',
                'descricao' => 'required|min:10',
                'preco' => 'required|numeric',
            ]
        );


        $produto->sku = $request->get('sku');
        $produto->titulo = $request->get('titulo');
        $produto->descricao = $request->get('descricao');
        $produto->preco = $request->get('preco');
        if ($produto->save()){
            return redirect('produtos/'.$id.'/edit')->with('success','Produto Atualizado com sucesso');
        }
    }
}
