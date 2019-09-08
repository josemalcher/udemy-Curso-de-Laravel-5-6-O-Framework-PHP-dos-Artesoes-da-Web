<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all(); // recebe todos os dados do produto

        echo '<pre>';
        print_r($produtos);
        echo '</pre>';

    }

    public function show($id)
    {
        $produtos = Produtos::find($id);

        echo '<pre>';
        print_r($produtos);
        echo '</pre>';
    }
}
