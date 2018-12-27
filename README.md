
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



[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Grupo no Facebook e Youtube</a>



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

