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

//        echo '<pre>';
//        print_r($produtos);
//        echo '</pre>';
        return view('produtos.show', array('produto' => $produto));
    }
}
