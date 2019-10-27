
# Curso de Laravel 5.6 - O Framework PHP dos Artesões da Web

https://www.udemy.com/curso-laravel/

Laravel é um Framework PHP utilizado para o desenvolvimento web, que utiliza a arquitetura MVC e tem como principal característica ajudar a desenvolver aplicações seguras e performáticas de forma rápida, com código limpo e simples. 

Para a criação de interface gráfica, o Laravel utiliza uma Engine de template chamada Blade, que traz uma gama de ferramentas que ajudam a criar interfaces bonitas e funcionais de forma rápida e evitando a duplicação de código. Para se comunicar com um Banco de Dados o Laravel utiliza uma implementação simples do ActiveRecord chamada de Eloquent ORM, que é uma ferramenta que traz várias funcionalidades para facilitar a inserção, atualização, busca e exclusão de registros. 

Com configuração simples e pequena e com pouco código podemos configurar a conexão com Banco de Dados e trabalhar com ele. Atualmente o Framework está em sua versão 5.6, e esta será a versão que utilizaremos durante o curso. O curso é indicado a todas as pessoas que conhecem um pouco de PHP, mesmo quem nunca trabalhou com nenhum Framework, pois o Laravel possui uma ótima documentação, uma comunidade muito ativa e uma curva de aprendizado bem menor do que outros Frameworks. 

Neste curso você irá aprender a criar uma máquina virtual pré configurada para o desenvolvimento em Laravel, após isto aprenderemos o básico para a criação de um projeto e na sequencia iremos aprender mais sobre o Framework PHP de maneira prática criando conteúdos que podem ser adaptados em projetos futuros.

## <a name="indice">Índice</a>

1. [Conhecendo o Framework Laravel](#parte1)     
2. [O que é MVC?](#parte2)     
3. [Grupo no Facebook e Youtube](#parte3)     
4. [O que irei aprender nesta seção?](#parte4)     
5. [Homestead - Instalação das Ferramentas](#parte5)     
6. [Homestead - Configuração](#parte6)     
7. [Homestead - Criando um Projeto Laravel](#parte7)     
8. [Homestead - Dia a Dia no Laravel](#parte8)     
9. [Conhecendo os comandos Artisan](#parte9)     
10. [Conhecendo a estrutura de pasta do Laravel](#parte10)     
11. [Conhecendo as Rotas no Laravel](#parte11)     
12. [Boas práticas na nomenclatura de arquivos](#parte12)     
13. [Configurando a conexão do Laravel com o Banco de Dados](#parte13)     
14. [Tradução das mensagens do Framework Laravel](#parte14)     
15. [O que irei aprender nesta seção?](#parte15)     
16. [Criando o Model e o arquivo de Migration](#parte16)     
17. [Criando a rota e o Controller dos nossos Produtos](#parte17)     
18. [Criando nossa primeira View no Laravel](#parte18)     
19. [Criando um Template Base com ajuda do Blade](#parte19)     
20. [Estilizando nossas View com Bootstrap](#parte20)     
21. [Adicionando a Página de Inclusão de Produtos](#parte21)     
22. [Validando os dados do Formulário](#parte22)     
23. [Lista de Validações disponíveis no Laravel](#parte23)     
24. [Criando a Página para Alteração de Produtos](#parte24)     
25. [Adicionando Fotos aos nossos Produtos](#parte25)     
26. [Melhorando a listagem e excluindo Produtos](#parte26)     
27. [Adicionando uma Barra de Busca ao nosso Catálogo](#parte27)     
28. [Criando a paginação com o Laravel](#parte28)     
29. [Primeiros passos na Autenticação de usuários no Laravel](#parte29)     
30. [Protegendo o acesso aos conteúdos de Criação, Edição e Exclusão das views](#parte30)     
31. [Configurando o Nome do Aplicativo e adicionando links na Barra de Navegação](#parte31)     
32. [O que irei aprender nesta seção?](#parte32)     
33. [Instalando a Biblioteca HTTP Guzzle](#parte33)     
34. [Criando um Conta no Provedor de serviços Mailgun](#parte34)     
35. [Ajustando as Configurações do Laravel para envio de Emails](#parte35)     
36. [Criando a View do Formulário de Contato](#parte36)     
37. [Criando o método de Envio de Emails no Controlador](#parte37)     
38. [Criando um Template de Email e Testando o Envio](#parte38)     
39. [O que é o Eloquent ORM?](#parte39)     
40. [Funções de Ordenação](#parte40)     
41. [Funções de Agregação](#parte41)     
42. [Acessando dados em múltiplas tabelas](#parte42)     
43. [Excluindo registros com segurança](#parte43)     
44. [Aula Bônus](#parte44)     
---


## <a name="parte1">1 - Conhecendo o Framework Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - O que é MVC?</a>

![](img_readme\mvc.PNG)

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Grupo no Facebook e Youtube</a>

- https://www.facebook.com/groups/pontocursos
- https://www.youtube.com/user/PontoCanalOficial


[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - O que irei aprender nesta seção?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Homestead - Instalação das Ferramentas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Homestead - Configuração</a>



[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - Homestead - Criando um Projeto Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Homestead - Dia a Dia no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Conhecendo os comandos Artisan</a>

O Framework Laravel possui uma ferramenta de linha de comando que é instalado assim que o desenvolvedor cria um novo projeto e essa ferramenta chama-se Artisan. 

O Artisan provê uma série de comandos altamente intuitivos que nos proporcionam a possibilidade de gerar classes, Models, FormRequest e tudo mais que o Framework possui pode ser acessado via Artisan.

Fazendo o uso do Artisan suas classes já são inteiramente criadas estendendo as classes corretas, salvas no diretório apropriado e também é gerado o arquivo para fazer os includes automáticos que forem necessários. Ao digitar o comando: php artisan, no prompt de comando você terá acesso a todos comandos para geração de código automático que ficam disponibilizados para o desenvolvedor.

Agora vamos exemplificar alguns comandos disponíveis:

- clear-compiled: Sempre que o Framework é colocado em produção as classes principais são compiladas para o carregamento seja mais rápido. Esse processo é feito em cache e caso você queira remover esse cache basta usar o comando clear-compiled.
- down: Caso sua aplicação esteja em produção e você precise realizar alguma manutenção que a aplicação necessite ficar alguns minutos fora de operação o comando: php artisan down, fará com que sua aplicação apresenta a tela manutenção padrão do Laravel e não fique off-line.
- up: Assim que a equipe de desenvolvimento concluir a manutenção basta apenas digitar o seguinte comando no prompt de comando: php artisan up.
- env: O comando: php artisan env, apresenta o ambiente de desenvolvimento que está sendo utilizado.
- optimize: O comando: php artisan optimize, realiza o cast no Framework para que o Laravel tenha sua melhor performance.
- help: O comando: php artisan help, lista todas as ajudas para o Framework.
- tinker: O comando: php artisan tinker, permite a interação com a aplicação.Como por exemplo a inserção de dados nas tabelas do banco de dados.
- migrate: O comando: php artisan migrate, executa as operações no banco de dados, criando tabelas, rodando script sql entre outros.
- list: O comando: php artisan list, executa a listagem de todos os comandos;
- make: O make possibilita a criação de código fonte, tornando assim o desenvolvimento altamente produtivo.

Alguns exemplos:

- php artisan make:controller : cria uma nova classe controller;
- php artisan make:model : cria uma nova classe model;
- php artisan make:migration : cria um novo arquivo de migração;

- route: O route possibilita a criação de rotas, tornando a aplicação mais segura.

Alguns exemplos:

- php artisan route:cache : cria um arquivo de rota cache de registro rápido;
- php artisan route:clear : remove o arquivo de rota do cache;
- php artisan route:list : apresenta todas as rotas registradas na aplicação;

Existem diversos outros comando que podem ser usados e ao longo do cursos iremos apresentar e utilizar alguns para otimizar nosso tempo programando.

[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Conhecendo a estrutura de pasta do Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Conhecendo as Rotas no Laravel</a>

- projeto1/app/Http/Controllers/ContatoController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $data['titulo'] = "Minha página de contato";
        return view('contato', $data);
    }

}

```

[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Boas práticas na nomenclatura de arquivos</a>

Ao trabalhar com um Framework é importante seguir o padrão de nomenclatura de arquivos adotado pelo mesmo e também as boas práticas de programação. A seguir listaremos o padrão de nomenclatura adotado pelo Laravel:

- Controller: devem iniciar com a primeira letra em maiúscula e não devem conter caracteres especiais. Controllers são classe e sendo assim o nome da classe deve coincidir com o nome do arquivo, por exemplo, a classe Contato deve ser salva em um arquivo chamado Contato.php e um nome composto teríamos a classe ContatoSite com o arquivo ContatoSite.php.
- Models: da mesma forma dos controllers eles são classes e devem adotar o mesmo padrão acima.
- Views: o nome do arquivo deve ser escrito em letras minúsculas e podem conter ou não a extensão .blade, exemplo, contato.blade.php.

Como uma boa prática de programação PHP, devemos iniciar nossos scripts PHP com <?php sem nenhum espaço, nenhuma linha ou qualquer outro caractere antes da tag de abertura, e não devemos incluir ao final do script a tag ?> .

Nos arquivos Laravel este é o padrão adotado, porém em arquivos mistos como as views que misturam HTML e PHP, neste caso devemos abrir e fechar as tags <?php  e ?>  sempre que necessário.

[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Configurando a conexão do Laravel com o Banco de Dados</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - Tradução das mensagens do Framework Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - O que irei aprender nesta seção?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - Criando o Model e o arquivo de Migration</a>



[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - Criando a rota e o Controller dos nossos Produtos</a>

```php
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

```

[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - Criando nossa primeira View no Laravel</a>

```php
<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all(); // recebe todos os dados do produto

    return view('produtos.index', array('produtos' => $produtos));
    }

    public function show($id)
    {
        $produto = Produtos::find($id);

        return view('produtos.show', array('produto' => $produto));
    }
}

```

```blade
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>

</head>
<body>
<h1>Produtos</h1>
<ul>
    @foreach($produtos as $produto)
        <li><a href="localhost:8000/produto/{{$produto->id}}">{{$produto->titulo}}</a></li>
    @endforeach
</ul>
</body>
</html>

```

[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - Criando um Template Base com ajuda do Blade</a>

- projeto1/resources/views/layout/app.blade.php

```blade
<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Laravel - @yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

```

- projeto1/resources/views/produtos/index.blade.php
- projeto1/resources/views/produtos/show.blade.php

```blade
@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')
<h1>Produtos</h1>
<ul>
    @foreach($produtos as $produto)
        <li><a href="http://localhost:8000/produtos/{{$produto->id}}">{{$produto->titulo}}</a></li>
    @endforeach
</ul>
@endsection

```



[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - Estilizando nossas View com Bootstrap</a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - Adicionando a Página de Inclusão de Produtos</a>

```blade
<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Laravel - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{URL::to('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>
</body>
</html>

```

[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - Validando os dados do Formulário</a>

```php
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
```

```blade
  @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
```

[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - Lista de Validações disponíveis no Laravel</a>

Veja abaixo todos os validadores disponíveis no Laravel 5.6:

Accepted - O campo sob validação deve ser yes , on , 1 ou true . Isso é útil para validar a aceitação de "Termos de Serviço".  
Active URL - Usa a função dns_get_records do PHP para verificar se uma URL responde.  
After - O campo sob validação deve conter uma data  posterior a da validação. As datas serão passadas para a strtotime desta forma: 'date' => 'required|date|after:tomorrow'   
After Or Equal - O campo sob validação deve ser uma data após ou igual à data especificada.  
Alpha - O campo sob validação deve ser totalmente alfabético.  
Alpha Dash - O campo sob validação pode ter caracteres alfanuméricos, bem como traços e sublinhados.  
Alpha Numeric - O campo sob validação deve ser totalmente de caracteres alfanuméricos.  
Array - O campo sob validação deve ser um  array  
Bail - Pare de executar as regras de validação após a primeira falha de validação.  
Before - O campo sob validação deve ser uma data anterior à data especificada.   
Before Or Equal - O campo sob validação deve ser uma data anterior ou igual à data especificada.  
Between - O campo sob validação deve ter um tamanho entre o min e max determinado . Strings, numéricos, matrizes e arquivos são avaliados da mesma maneira que as regras do size.  
Boolean - O campo sob validação deve poder ser convertido em booleano. Entradas aceitas são true, false, 1, 0, "1", e "0".  
Confirmed - O campo deve conter um valor igual a outro campo, útil para confirmações de endereços de emails ou telefone. Exemplo: para confirmar um campo email, use confirmed:email_confirmation.  
Date - O campo sob validação deve ser uma data válida de acordo com a função PHP strtotime.  
Date Equals - O campo sob validação deve ser igual à data especificada.  
Date Format - Verifica se a data informada segue um formato específico. Exemplo: date_format: "d/m/Y".  
Different - O campo sob validação deve ter um valor diferente de um determinado campo.  
Digits - O campo sob validação deve ser numérico e deve ter um tamanho exato.  
Digits Between - O campo sob validação deve ter um comprimento entre o min e max determinado.  
Dimensions - O arquivo sob validação deve ser uma imagem que atenda às restrições de dimensão, conforme especificado pelos parâmetros de regra, exemplo: 'avatar' => 'dimensions:min_width=100,min_height=200'   
Distinct - Ao trabalhar com matrizes, o campo sob validação não deve ter nenhum valor duplicado.  
E-Mail - O campo sob validação deve ser um endereço de e-mail.  
Exists - O campo sob validação deve existir em uma determinada tabela do banco de dados. Exemplo: exists:clientes.  
File - O campo sob validação deve ser um arquivo carregado com sucesso.  
Filled - O campo sob validação não deve estar vazio quando estiver presente.  
Image - O arquivo sob validação deve ser uma imagem (jpeg, png, bmp, gif ou svg).  
In – O valor do campo deve estar em uma lista de valores informados.  
In Array – O valor do campo deve estar contido em outro campo com múltiplos valores, um select por exemplo.  
Integer - O campo sob validação deve ser um inteiro.  
IP - O campo sob validação deve ser um endereço IP.  
IPv4 - O campo sob validação deve ser um endereço IPv4.  
IPv6 - O campo sob validação deve ser um endereço IPv6.  
JSON - O campo sob validação deve ser uma string JSON válida.  
Max - O campo sob validação deve ser menor ou igual a um valor máximo. Strings, numéricos, matrizes e arquivos são avaliados da mesma maneira que as regras size.  
MIME Types - O arquivo sob validação deve corresponder a um dos tipos MIME fornecidos: Exemplo: 'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime'.   
MIME Type By File Extension – Verifica o tipo de arquivos de acordo com a extensão. Exemplo: 'foto' => 'mimes:jpeg,bmp,png'.   
Min - O campo sob validação deve ter um valor mínimo . Strings, numéricos, matrizes e arquivos são avaliados da mesma maneira que a regra size.  
Not In – O valor do campo informado não deve estar em uma lista de valores.  
Not Regex - O campo sob validação não deve corresponder à uma expressão regular dada.  
Nullable - O campo sob validação pode ser null. Isso é particularmente útil ao validar primitivos, como cadeias de caracteres e inteiros que podem conter valores nulos.  
Numeric - O campo sob validação deve ser numérico.  
Present - O campo sob validação deve estar presente no formulário, mas pode estar vazio.  
Regular Expression  - O campo sob validação deve corresponder à expressão regular fornecida. Exemplo, para validar um campo que contém um CEP usamos regex:”[0-9]{5}-[0-9]{3}$” .  
Required – O campo sob validação deve estar presente e não pode estar vazio.  
Required If - O campo sob validação deve estar presente e não pode estar vazio, se outro campo for igual a certo valor.  
Required Unless - O campo sob validação deve estar presente e não pode estar vazio, a menos se outro campo for igual a certo valor.  
Required With - O campo sob validação deve estar presente e não pode estar vazio, se qualquer um dos outros campos especificados estiverem presentes.  
Required With All - O campo sob validação deve estar presente e não pode estar vazio, se todos os outros campos especificados estiverem presentes.  
Required Without – O campo a ser validado deve ser preenchido se um outro campo especificado  não estiver preenchido.  
Required Without All - O campo a ser validado deve ser preenchido quando nenhum dos outros campos  estiverem preenchido.  
Same - O campo especificado deve corresponder ao campo em validação.  
Size - O campo sob validação deve ter um tamanho correspondente ao valor fornecido . Para dados de string, o valor corresponde ao número de caracteres. Para dados numéricos, o valor corresponde a um valor inteiro. Para um array, size corresponde ao count do array. Para arquivos, size corresponde ao tamanho do arquivo em kilobytes.   
String - O campo sob validação deve ser uma string. Se você quiser permitir que o campo também seja null, você deve atribuir a regra nullable ao campo.  
Timezone - O campo sob validação deve ser um identificador de fuso horário válido de acordo com a função PHP timezone_identifiers_list.  
Unique - O campo sob validação deve ser exclusivo em uma determinada tabela do banco de dados.   
URL - O campo sob validação deve ser uma URL válida.  
  

[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - Criando a Página para Alteração de Produtos</a>

- projeto1/app/Http/Controllers/ProdutosController.php

```php

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

```

- projeto1/resources/views/produtos/edit.blade.php

```blade
@extends('layout.app')
@section('title', 'Adicionar um  de Produtos - ' . $produto->titulo)
@section('content')
    <h1>Editar Produto</h1>
    <h2 class="mb-3">Produto - {{$produto->titulo}}</h2>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{action('ProdutosController@update', $id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group mb-3">
            <label for="sku">SKU</label>
            <input value="{{$produto->sku}}" type="text" class="form-control" id="sku" name="sku" placeholder="Digite o Código do Produto..."
                   required>
        </div>
        <div class="form-group mb-3">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" value="{{$produto->titulo}}" name="titulo" placeholder="Digite o Nome do Produto..."
                   required>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"
                      placeholder="Digite uma breve descrição do Produto..." required>{{$produto->descricao}}</textarea>
        </div>
        <label for="preco">Preço</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">R$</span>
            </div>
            <input type="number" step=".01" class="form-control" id="preco" value="{{$produto->preco}}" name="preco" placeholder="0,00" required>
        </div>
        <button type="submit" class="btn btn-primary">Alterar Produto</button>
    </form>
@endsection

```

[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - Adicionando Fotos aos nossos Produtos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte26">26 - Melhorando a listagem e excluindo Produtos</a>

- projeto1/resources/views/produtos/index.blade.php

```blade
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

```

- projeto1/app/Http/Controllers/ProdutosController.php

```php
public function destroy($id)
    {
        $produto = Produtos::find($id);

        if(file_exists("./img/produtos/".md5($id).".jpg")){
            unlink("./img/produtos/".md5($id).".jpg");
        }

        $produto->delete();
        return redirect()->back()->with('success','Produto Deletado');
    }
```

[Voltar ao Índice](#indice)

---


## <a name="parte27">27 - Adicionando uma Barra de Busca ao nosso Catálogo</a>

- projeto1/app/Http/Controllers/ProdutosController.php

```php
 public function busca(Request $request)
    {
        $buscaInput = $request->input('busca');
        $produtos = Produtos::where('titulo','LIKE','%'.$buscaInput.'%')
            ->orwhere('descricao','LIKE','%'.$buscaInput.'%')
            ->get();
        return view('produtos.index',array('produtos'=> $produtos, 'busca'=>$buscaInput));
    }
```

- projeto1/resources/views/produtos/index.blade.php

```blade
<div class="row">
        <div class="mb-12">
            <form method="POST" action="{{url('produtos/busca')}}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="busca" name="busca" placeholder="Procuar produtos no site" value="{{$busca}}" >
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary">Buscar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
```

[Voltar ao Índice](#indice)

---


## <a name="parte28">28 - Criando a paginação com o Laravel</a>

- projeto1/app/Http/Controllers/ProdutosController.php

```php
 public function index(){
         //$produtos = Produtos::all(); // recebe todos os dados do produto
         $produtos = Produtos::paginate(3); //exibe apenas 3
 
     return view('produtos.index', array('produtos' => $produtos,'busca'=> null));
     }
```

- projeto1/resources/views/produtos/index.blade.php

```blade
        @endforeach
    </div>
    {{$produtos->links()}}
@endsection
```

[Voltar ao Índice](#indice)

---


## <a name="parte29">30 - Primeiros passos na Autenticação de usuários no Laravel</a>

```
$ php artisan make:auth
```




[Voltar ao Índice](#indice)

---


## <a name="parte30">31 - Protegendo o acesso aos conteúdos de Criação, Edição e Exclusão das views</a>

- projeto1/app/Http/Controllers/ProdutosController.php
```php
   if(Auth::check()){
            return view('produtos.create');
        }else{
            return redirect('login');
        }
        return view('produtos.create');

 public function edit($id)
    {
        if(Auth::check()){
            $produto = Produtos::find($id);
            return view('produtos.edit', compact('produto','id'));
        }else{
            return redirect('login');
        }

    }
```

- ocultar botões
- projeto1/resources/views/produtos/index.blade.php

```blade
            @if(Auth::check())
                    <div class="mb-3">
                        <form method="POST" action="{{action('ProdutosController@destroy',$produto->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <a href="{{URL::to('produtos/'.$produto->id.'/edit')}}" class="btn btn-primary">Editar</a>
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                @endif
```

[Voltar ao Índice](#indice)

---


## <a name="parte31">32 - Configurando o Nome do Aplicativo e adicionando links na Barra de Navegação</a>

- projeto1/resources/views/layouts/app.blade.php
- projeto1/.env



[Voltar ao Índice](#indice)

---


## <a name="parte32">32 - O que irei aprender nesta seção?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte33">33 - Instalando a Biblioteca HTTP Guzzle</a>

- composer require guzzlehttp/guzzle

[Voltar ao Índice](#indice)

---


## <a name="parte34">34 - Criando um Conta no Provedor de serviços Mailgun</a>

- https://www.mailgun.com/

[Voltar ao Índice](#indice)

---


## <a name="parte35">35 - Ajustando as Configurações do Laravel para envio de Emails</a>



[Voltar ao Índice](#indice)

---


## <a name="parte36">36 - Criando a View do Formulário de Contato</a>



[Voltar ao Índice](#indice)

---


## <a name="parte37">37 - Criando o método de Envio de Emails no Controlador</a>

- projeto1/app/Http/Controllers/ContatoController.php

```php
public function enviar(Request $request)
    {
        $dadosEmail = array(
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'msg' => $request->input('msg'),
        );

        Mail::send('email.contato',$dadosEmail, function ($message){
            $message->from('formulario@josemalcher.net','Formulario teste de envio');
            $message->subject('Mensagem enviado pelo form de contato - test');
            $message->to('malcher.malch@gmail.com');
            //$message->to()->cc();

        });//template de email
        return redirect('contatao')->with('success','Mensagem enviada, em breve vamos conversar!');
    }
```

- projeto1/routes/web.php

```php
Route::get('/contato',        'ContatoController@index');
Route::post('/contato/enviar','ContatoController@enviar');

```

[Voltar ao Índice](#indice)

---


## <a name="parte38">38 - Criando um Template de Email e Testando o Envio</a>

- projeto1/resources/views/email/contato.blade.php

```blade

@extends('layout.app') //layout simples
@section('content')

    <div class="row">
        <h4 class="mb-3">Contato pelo Site</h4>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td><strong>Nome:</strong></td>
                <td>{{$nome}}</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>{{$email}}</td>
            </tr>
            <tr>
                <td><strong>Assunto:</strong></td>
                <td>{{$assunto}}</td>
            </tr>
            <tr>
                <td><strong>Mensagem:</strong></td>
                <td>
                    {{$msg}}
                </td>
            </tr>
            <tr>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

```

[Voltar ao Índice](#indice)

---


## <a name="parte39">39 - O que é o Eloquent ORM?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte40">40 - Funções de Ordenação</a>


- projeto1/app/Http/Controllers/ProdutosController.php

```php
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
```

[Voltar ao Índice](#indice)

---


## <a name="parte41">41 - Funções de Agregação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte42">42 - Acessando dados em múltiplas tabelas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte43">43 - Excluindo registros com segurança</a>



[Voltar ao Índice](#indice)

---


## <a name="parte44">44 - Aula Bônus</a>



[Voltar ao Índice](#indice)

---

