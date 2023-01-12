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
<a href="#aula12">Aula 12: If/else parte 1 - Introdução</a><br>
<a href="#aula13">Aula 13: Operadores de comparação (condicionais)</a><br>
<a href="#aula14">Aula 14: If/else parte 2 - Praticando com operadores de comparação</a><br>
<a href="#aula15">Aula 15: Operadores lógicos</a><br>
<a href="#aula16">Aula 16: If/else parte 3 - Praticando com operadores lógicos</a><br>
<a href="#aula17">Aula 17: If/else parte 4 - Praticando um pouco mais</a><br>
<a href="#aula18">Aula 18: If/else parte 5 - Condições encadeadas</a><br>
<a href="#aula19">Aula 19: Operador ternário</a><br>
<a href="#aula20">Aula 20: Atividades para fixação do conteúdo</a><br>
<a href="#aula21">Aula 21: Switch</a><br>
<a href="#aula22">Aula 22: Switch na prática</a><br>
<a href="#aula23">Aula 23: Casting de tipos com (int), (bool), (float) e (string)</a><br>
<a href="#aula24">Aula 24: Operadores aritméticos</a><br>
<a href="#aula25">Aula 25: Praticando com operadores aritméticos</a><br>
<a href="#aula26">Aula 26: Operações aritméticas na atribuição de valores</a><br>
<a href="#aula27">Aula 27: Operadores de incremento/decremento</a><br>
<a href="#aula28">Aula 28: Praticando com operadores de incremento/decremento</a><br>
<a href="#aula29">Aula 29: Funções - Introdução</a><br>
<a href="#aula30">Aula 30: Funções - Prática</a><br>
<a href="#aula31">Aula 31: Atividades para fixação do conteúdo</a><br>


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

<div id="aula11" align="center">
<h2>Aula 11: Variáveis constantes.</h2>
</div>  

São variáveis cujos valores não podem ser modificados (não podem ser sobrepostos). Geralmente são utilizadas para parametrização de informações de ambiente da aplicação (ambiente de desenvolvimento). Dão uma maior segurança ao código (quando migramos ao ambiente de produção, por exemplo).

>arquivo variaveis_constantes.php

Para criação de variáveis constantes, utilizar a função **define()**, que tem dois parâmetros: 
- nome da variável (em formato de string);
- e valor!

Sempre utilizar *caracteres maiúsculos* (boas práticas)!
Não é necessário utilizar $.

~~~php
define('BD_URL', 'endereco_bd_dev');
define('BD_USUARIO', 'usuario_dev');
define('BD_SENHA', 'senha_dev');

echo BD_URL . '<br>';
echo BD_USUARIO . '<br>';
echo BD_SENHA;
~~~


<hr>

<div id="aula12" align="center">
<h2>Aula 12: If/else parte 1 - Introdução.</h2>
</div>  

É uma estrutura de controle, que permite definir o fluxo que a aplicação tomará, a partir de uma determinada condição.
A instrução else é opcional.

Sintaxe:
~~~
if (condição) {
  // trecho de código que será executado
} else {
  // trecho de código que será executado
}
~~~

Encadeado:
~~~
if (condição) {
  // trecho de código que será executado
} else if (condicão) {
  // trecho de código que será executado
} else {
  // trecho de código que será executado
}
~~~


<hr>

<div id="aula13" align="center">
<h2>Aula 13: Operadores de comparação (condicionais).</h2>
</div>  

Também conhecidos como operadores relacionais, são capazes de formar as expressões condicionais, que serão colocadas dentro dos comandos if.

São eles (9):

OPERADOR | REPRESENTAÇÃO | SIGNIFICADO
---------|:---------------:|--------------
Igual | == | Verifica se os valores comparados são iguais
Idêntico | === | Verifica se os valores comparados são iguais e do mesmo tipo
Diferente | != | Verifica se os valores comparados são diferentes
Diferente | &lt;&gt; | Verifica se os valores comparados são diferentes
Não idêntico | !== | Verifica se os valores comparados são diferentes e de tipos diferentes
Menor | &lt; | Verifica se o valor da esquerda é menor que o da direita
Maior | &gt; | Verifica se o valor da esquerda é maior que o da direita
Menor igual | &lt;= | Verifica se o valor da esquerda é menor ou igual ao da direita
Maior igual | &gt;= | Verifica se o valor da esquerda é maior ou igual ao da direita


<hr>

<div id="aula14" align="center">
<h2>Aula 14: If/else parte 2: Praticando com operadores de comparação.</h2>
</div>  

> arquivo ifelse_operadores_condicionais.php

Aplicação dos operadores de comparação apresentados na aula anterior.

Podemos omitir as chaves, caso o if possua apenas uma instrução. Entretanto, recomenda-se sempre abrir e fechar as chaves (para definir o bloco de código explicitamente).


<hr>

<div id="aula15" align="center">
<h2>Aula 15: Operadores lógicos.</h2>
</div>  

Operadores lógicos permitem conectar operações de comparação, a fim de criar condições mais exigentes.

OPERADOR | REPRESENTAÇÃO | SIGNIFICADO
:---------:|:---------------:|--------------
E | AND ou && | V se todas as expressões forem V
OU | OR ou &#124;&#124; | V se pelo menos uma das expressões for V
Xor | XOR | V apenas se uma das expressões for V, mas não ambas
Negação | ! | Inverte o resultado da expressão


<hr>

<div id="aula16" align="center">
<h2>Aula 16: If/else parte 3 - Praticando com operadores lógicos.</h2>
</div>

> arquivo ifelse_operadores_logicos.php

Operadores lógicos podem conectar de 2 a n operações de comparação!

Os parênteses permitem estabelecer precedência (o interpretador lerá primeiro o que está nos parênteses, e inicialmente os mais internos).

~~~php
// E - && (retorna V se todos os resultados forem V)

if(5 == 3 && 10 > 3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
~~~

~~~php
// OU - || (retorna V se pelo menos um dos resultados for V)

if(5 == 5 || 10 < 3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
~~~

~~~php
// XOR - XOR (V se uma das expressões for V e a outra F, ou vice-versa).
if(5 == 5 XOR 10 > 3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
~~~

~~~php
// negação - ! (inverte o resultado da expressão)
if(!('a' == 'b')) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
~~~


<hr>

<div id="aula17" align="center">
<h2>Aula 17: If/else parte 4 - Praticando um pouco mais.</h2>
</div>

> arquivo ifelse_praticando_mais_um_pouco.php

Exemplo de uma situação em um e-commerce, onde: é dado frete gratuito se o usuário possuir o cartão da loja E se o valor da compra for maior que 100 reais.

Obs: se for testar variável do tipo booleana dentro de um operador lógico, não precisamos compararcom "==", apenas indicar a variável.

~~~php
<?php
$usuario_possui_cartao_loja = true;
$valor_compra = 99;

$valor_frete = 50;
$recebeu_desconto_frete = false;

if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
  $valor_frete = 0;
  $recebeu_desconto_frete = true;
}
?>

<h1>Detalhes do pedido</h1>
<p>Possui cartão da loja?

<?php
  if ($usuario_possui_cartao_loja == true) {
    echo 'SIM';
  } else {
    echo 'NÃO';
  }
  ?>
</p>

<p>Valor da compra: <?= $valor_compra?></p>

<p>Recebeu desconto no frete?

<?php
  if ($recebeu_desconto_frete) {
    echo 'SIM';
  } else {
    echo 'NÃO';
  }
?>
</p>

<p>Valor do frete: <?= $valor_frete?></p>
~~~

<hr>

<div id="aula18" align="center">
<h2>Aula 18: If/else parte 5 - Condições encadeadas.</h2>
</div>

> arquivo ifelse_praticando_mais_um_pouco.php

~~~php
<?php
  $usuario_possui_cartao_loja = true;
  $valor_compra = 250;

  $valor_frete = 50;
  $recebeu_desconto_frete = true;

  if ($usuario_possui_cartao_loja  && $valor_compra >= 400) {
      $valor_frete = 0;

  } else if ($usuario_possui_cartao_loja  && $valor_compra >= 300) {
      $valor_frete = 10;

  } else if ($usuario_possui_cartao_loja  && $valor_compra >= 100) {
      $valor_frete = 25;

  } else {
      //...
      $recebeu_desconto_frete = false;
  }
?>

<h1>Detalhes do pedido</h1>
<p>Possui cartão da loja?
    <?php
      if ($usuario_possui_cartao_loja) {
          echo 'SIM';
      } else {
          echo 'NÃO';
      }
    ?>
</p>

<p>Valor da compra: <?= $valor_compra ?></p>

<p>Recebeu desconto no frete?
    <?php
      if  ($recebeu_desconto_frete) {
        echo 'SIM';
      } else {
        echo 'NÃO';
      }
    ?>
</p>

<p>Valor do frete: <?= $valor_frete ?></p>
~~~


<hr>

<div id="aula19" align="center">
<h2>Aula 19: Operador ternário.</h2>
</div>

Permite, com base em determinada condição, seguir ou não um fluxo. É mais limitado, pois retorna apenas uma instrução quando V ou F. Entretanto, são menos verbosos.

Sintaxe:
~~~
// <condição> ? true : false
~~~

Exemplo (aplicando com base no exercício da aula anterior):

~~~php
<h1>Detalhes do pedido</h1>
<p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?></p>
    // ou $usuario_possui_cartao_loja == true ?  'SIM' : 'NÃO';

<p>Valor da compra: <?= $valor_compra ?></p>

<p>Recebeu desconto no frete?
    <?php
      $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
      echo $teste; 
    ?>
</p>
~~~

Apesar de não ser uma prática recomendada, há a possibilidade de utilizar operadores ternários encadeados (com parênteses).


<hr>

<div id="aula20" align="center">
<h2>Aula 20: Atividades para fixação do conteúdo.</h2>
</div>

Enunciado:
"Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis $idade e $peso no processo. Neste primeiro momento, faca a atribuição de valores às variáveis de forma estática, ou seja, no processo de atribuição.

Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos".

Resolução:
~~~php
$idade = 90;
$peso = 45;

if ($peso >= 50 && ($idade >= 16 && $idade <= 69)) {
  echo 'Atende aos requisitos!';
} else {
  echo 'Não atende aos requisitos...';
}
~~~


<hr>

<div id="aula21" align="center">
<h2>Aula 21: Switch.</h2>
</div>

É um condicional; visa, com base em determinada condição, seguir determinado fluxo dentro da aplicação.

É mais restrito, pois permite apenas comparar idênticos. Bom em caso de organização de um meno, por exemplo.

Exemplo:

~~~php
$opcao = 2

switch (opcao) {
  case 1:
    // trecho de código que será executado
    break;

  case 2:
    // trecho de código que será executado
    break;

  default:
    // trecho de código que será executado
    break;
}
~~~


<hr>

<div id="aula22" align="center">
<h2>Aula 22: Switch na prática.</h2>
</div>

