<div align="center">
<h2>Estudando PHP 🐘</h2>
<h3>Seção 11: PHP</h3>
<p>Curso Desenvolvimento Web Completo 2022.</p>
</div>

<div align="justify">

## Introdução ao PHP
<a href="#aula01">Aula 01: O que é PHP?</a><br>
<a href="#aula02">Aula 02: Embutindo blocos PHP em páginas HTML</a><br>
<a href="#aula03">Aula 03: Habilitando e testando tags curtas (short_open_tag)</a><br>
<a href="#aula04">Aula 04: Saída de dados com echo() e print()</a><br>
<a href="#aula05">Aula 05: Funcionamento do PHP um pouco mais a fundo (páginas estáticas x dinâmicas)</a><br>
<a href="#aula06">Aula 06: Comentários</a><br>
<a href="#aula07">Aula 07: Variáveis - introdução</a><br>
<a href="#aula08">Aula 08: Variáveis - prática</a><br>
<a href="#aula09">Aula 09: Alterando valores de variáveis</a><br>
<a href="#aula10">Aula 10: Concatenação</a><br>
<a href="#aula11">Aula 11: Variáveis constantes</a><br>



<hr>

<div id="aula01" align="center">
<h2>Aula 01: O que é PHP?</h2>
</div>

PHP = "Hypertext Preprocessor"; seu uso é livre.

É uma linguagem de programação focada na criação de aplicações do lado do servidor.

Pode ser utilizado:
- diretamente na linha de comando (scripts de linha e comando, que podem ser executados diretamente pelo shell do SO);
- aplicações desktop (PHP - GTK);
- aplicações server-side (scripts).

É uma linguagem de programação interpretada e não compilada; ou seja, os scripts da aplicação não serão submetidos a uma compilação prrévia a fim de gerar um executável; serão interpretados em tempo de requisição das páginas.

É compatível com diversos SOs, e acrita tanto paradigma estrutural quanto orientado a objeto.

Tem suporte a diversos BDs, e tem vasto suporte a diversos protocolos de comunicação.


<hr>

<div id="aula02" align="center">
<h2>Aula 02: Embutindo blocos PHP em páginas HTML</h2>
</div>

Formas de inclusão do PHP em arquivos HTML:

<div align="center">

NOME | TAG | STATUS
:---------:|:-----------:|:-------:
Tag padrão | &lt;?php código aqui ?&gt; | Habilitada
Tag de impressão | &lt;?= php código aqui ?&gt; | Habilitada
Tag curta | &lt;? código aqui ?&gt; | Desabilitada
*Asp tag | &lt;% código aqui %&gt; | Descontinuada na versão 7

</div>


<hr>

<div id="aula03" align="center">
<h2>Aula 03: Habilitando e testando tags curtas (short_open_tag)</h2>
</div>

A tag curta não está mais disponível na versão 8 do PHP! Utilizar a tag padrão:

~~~php
<?php código aqui ?>
~~~


<hr>

<div id="aula04" align="center">
<h2>Aula 04: Saída de dados com echo() e print()</h2>
</div>

Ambos possuem o objetivo de imprimir conteúdos advindos do bloco de código PHP dentro do arquivo HTML que é entregue ao usuário.

Podemos utilizar aspas simples ou duplas.

A última instrução não precisa de ";".

Echo é um construtor de linguagem, enquanto o print inicialmente era uuma função.

~~~php
<?php
  echo 'Comando echo <br>';
  print 'Comando print<hr>';
?>
~~~

>arquivo echo_print.php

<hr>

<div id="aula05" align="center">
<h2>Aula 05: Funcionamento do PHP um pouco mais a fundo (páginas estáticas x dinâmicas)</h2>
</div>

Páginas estáticas são arquivos HTML com codificação hardcode, sem tratativas no arquivo, enquanto páginas web dinâmicas são páginas produzidas no intervalo entre a requisição e a resposta que é recebida e devolvida pelo servidor HTTP (nesse caso, o Apache).

Se a solicitação recebida for um arquivo PHP, então repassa a solicitação para o interpretador do PHP. Isso faz com que abra o script solicitado, interprete e devolva o retorno (uma página HTML) ao Apache.


<hr>

<div id="aula06" align="center">
<h2>Aula 06: Comentários</h2>
</div>

Importante para manutenção de estruturas e documentação.

~~~php
// comentário de uma linha

# comentário de uma linha no estilo shell

/*
  Comentário de 
  múltiplas linhas
*/
~~~

>arquivo comentarios.php


<hr>

<div id="aula07" align="center">
<h2>Aula 07: Variáveis - Introdução</h2>
</div>

**Variáveis** são utilizadas para armazenamento de dados. Em PHP, há tipos específicos de variáveis (que definem o tipo de dado que está presente na variável): string, int, float, boolean, array, ...

Regras para declaração de variáveis em PHP:
- deve obigatoriamente iniciar com o caractere **$**.
- não pode conter espaços ou caracteres especiais (com exceção do underline).

Não requer (ou suporte) a definição explícita de tipo. O PHP tem a inteligência para identificar o tipo de variável no momento da atribuição do valor (a tipagem é dinâmica).

Case sensitive!!!

Exemplos: $nome, $fone1, $endereco_2


<hr>

<div id="aula08" align="center">
<h2>Aula 08: Variáveis - Prática (string, int, float e boolean).</h2>
</div>

>arquivo variaveis.php

~~~php
<body>
<?php
// string
$nome = "Mônica :)";
// int
$idade = 31;
// float
$altura = 1.59;
//boolean
$fumante = false; // true = 1 e false = vazio (nada é retornado)
?>
  
<h1>Ficha cadastral</h1>
<p>Nome: <?= $nome ?></p>
<p>Idade: <?= $idade ?></p>
<p>Altura: <?= $altura ?></p>
<p>Fumante? <?= $fumante ?></p>
~~~


<hr>

<div id="aula09" align="center">
<h2>Aula 09: Alterando valores de variáveis.</h2>
</div>

>arquivo variaveis.php

Em qualquer momento da lógica do script poderemos alterar os valores das variáveis. A alteração também pode ocorrer a nível de tipo (característico de linguagens de tipagem fraca).


<hr>

<div id="aula10" align="center">
<h2>Aula 10: Concatenação.</h2>
</div>

>arquivo concatenacao.php

A concatenação é realizada a partir do operador "**.**"!

Também podemos utilizar aspas duplas para fazer a concatenação de cadeias de caracteres com valores de variáveis.
(não se aplica a aspas simples!!!)

Como aspas simples não dão margem pra concatenação em seu interior (apenas com .), são mais rápidas que as duplas (que sempre serão verificadas)!

~~~php
$nome = "Mônica";
$idade = 31;
$cor = "rosa";

// para concatenação, usar o operador "."
echo "Olá, meu nome é " . $nome . "! Tenho " . $idade . " anos e minha cor favorita é " . $cor . ". :)";

echo "<br>";

// utilização de aspas duplas para concatenação
echo "Olá, $nome! Tudo bem?" 
~~~


<hr>

<div id="aula11'" align="center">
<h2>Aula 11: Variáveis constantes.</h2>
</div>