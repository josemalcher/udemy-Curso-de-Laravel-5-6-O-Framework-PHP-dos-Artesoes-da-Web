<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    public function index(){
        //$produtos = Produtos::all(); // recebe todos os dados do produto
        $produtos = Produtos::paginate(10); // recebe todos os dados do produto

        $maiscaro   = Produtos::all()->max('preco');
        $maisbarato = Produtos::all()->min('preco');
        $media      = Produtos::all()->avg('preco');
        $soma       = Produtos::all()->sum('preco');
        $contagem   = Produtos::all()->count();
        $maiorquedez= Produtos::where('preco','>','10')->count();

/*        echo '<pre>';
        print_r($produtos);
        echo '</pre>';*/

    return view('produtos.index', array(
        'produtos' => $produtos,
        'busca'=> null,
        'ordem'=>null,
        'maiscaro'=>$maiscaro,
        'maisbarato'=>$maisbarato,
        'media'=>$media,
        'soma'=>$soma,
        'contagem'=>$contagem,
        'maiorquedez'=> $maiorquedez
        ));
    }

    public function show($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.show', array('produto' => $produto));
    }

    public function create()
    {
        if(Auth::check()){
            return view('produtos.create');
        }else{
            return redirect('login');
        }
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
        if(Auth::check()){
            $produto = Produtos::find($id);
            return view('produtos.edit', compact('produto','id'));
        }else{
            return redirect('login');
        }

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

        if($request->hasFile('imgproduto')){
            $imagem = $request->file('imgproduto');
            $nomearquivo = md5($id).".".$imagem->getClientOriginalExtension();
            $request->file('imgproduto')->move(public_path('./img/produtos'),$nomearquivo);
        }

        $produto->sku = $request->get('sku');
        $produto->titulo = $request->get('titulo');
        $produto->descricao = $request->get('descricao');
        $produto->preco = $request->get('preco');
        if ($produto->save()){
            return redirect('produtos/'.$id.'/edit')->with('success','Produto Atualizado com sucesso');
        }
    }
    public function destroy($id)
    {
        $produto = Produtos::find($id);

        if(file_exists("./img/produtos/".md5($id).".jpg")){
            unlink("./img/produtos/".md5($id).".jpg");
        }

        $produto->delete();
        return redirect()->back()->with('success','Produto Deletado');
    }
    public function busca(Request $request)
    {
        $buscaInput = $request->input('busca');
        $produtos = Produtos::where('titulo','LIKE','%'.$buscaInput.'%')
            ->orwhere('descricao','LIKE','%'.$buscaInput.'%')
            //->get();
            ->paginate(4);
        return view('produtos.index',array('produtos'=> $produtos, 'busca'=>$buscaInput,'ordem'=>null));
    }

    public function ordem(Request $request)
    {
        $ordemImput = $request->input('ordem');
        if($ordemImput == 1){
            $campo = 'titulo';
            $tipo = 'asc';
        }elseif($ordemImput == 2){
            $campo = 'titulo';
            $tipo = 'desc';
        }elseif($ordemImput == 3){
            $campo = 'preco';
            $tipo = 'asc';
        }elseif($ordemImput == 4){
            $campo = 'preco';
            $tipo = 'desc';
        }
        $produtos = Produtos::orderBy($campo,$tipo)->paginate(10);
        return view('produtos.index',array('produtos'=>$produtos, 'busca'=> null, 'ordem'=>$ordemImput));
    }
}
