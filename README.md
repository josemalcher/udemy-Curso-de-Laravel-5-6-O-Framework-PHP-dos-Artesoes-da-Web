
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



[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Boas práticas na nomenclatura de arquivos</a>



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



[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - Criando nossa primeira View no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - Criando um Template Base com ajuda do Blade</a>



[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - Estilizando nossas View com Bootstrap</a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - Adicionando a Página de Inclusão de Produtos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - Validando os dados do Formulário</a>



[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - Lista de Validações disponíveis no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - Criando a Página para Alteração de Produtos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - Adicionando Fotos aos nossos Produtos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte26">26 - Melhorando a listagem e excluindo Produtos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte27">27 - Adicionando uma Barra de Busca ao nosso Catálogo</a>



[Voltar ao Índice](#indice)

---


## <a name="parte28">28 - Criando a paginação com o Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte29">29 - Primeiros passos na Autenticação de usuários no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte30">30 - Protegendo o acesso aos conteúdos de Criação, Edição e Exclusão das views</a>



[Voltar ao Índice](#indice)

---


## <a name="parte31">31 - Configurando o Nome do Aplicativo e adicionando links na Barra de Navegação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte32">32 - O que irei aprender nesta seção?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte33">33 - Instalando a Biblioteca HTTP Guzzle</a>



[Voltar ao Índice](#indice)

---


## <a name="parte34">34 - Criando um Conta no Provedor de serviços Mailgun</a>



[Voltar ao Índice](#indice)

---


## <a name="parte35">35 - Ajustando as Configurações do Laravel para envio de Emails</a>



[Voltar ao Índice](#indice)

---


## <a name="parte36">36 - Criando a View do Formulário de Contato</a>



[Voltar ao Índice](#indice)

---


## <a name="parte37">37 - Criando o método de Envio de Emails no Controlador</a>



[Voltar ao Índice](#indice)

---


## <a name="parte38">38 - Criando um Template de Email e Testando o Envio</a>



[Voltar ao Índice](#indice)

---


## <a name="parte39">39 - O que é o Eloquent ORM?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte40">40 - Funções de Ordenação</a>



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

