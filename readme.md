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
<a href="#aula32">Aula 32: Funções nativas para manipular strings</a><br>
<a href="#aula33">Aula 33: Funções nativas para tarefas matemáticas</a><br>
<a href="#aula34">Aula 34: Funções nativas para manipular datas</a><br>
<a href="#aula35">Aula 35: Array básico - Introdução</a><br>
<a href="#aula36">Aula 36: Array básico - Prática</a><br>
<a href="#aula37">Aula 37: Array multidimensional</a><br>
<a href="#aula38">Aula 38: Array - Métodos de pesquisa</a><br>
<a href="#aula39">Aula 39: Extra - False, Null e Empty</a><br>
<a href="#aula40">Aula 40: Funções nativas para manipular arrays</a><br>
<a href="#aula41">Aula 41: Loops parte 1 - Introdução</a><br>
<a href="#aula42">Aula 42: Loops parte 2 - While</a><br>
<a href="#aula43">Aula 43: Loops parte 3 - Do while</a><br>
<a href="#aula44">Aula 44: Loops parte 4 - For</a><br>
<a href="#aula45">Aula 45: Praticando um pouco - Percorrendo arrays</a><br>
<a href="#aula46">Aula 46: Loops parte 5 - Foreach</a><br>
<a href="#aula47">Aula 47: Praticando um pouco - Foreach em arrays</a><br>
<a href="#aula48">Aula 48: Atividades para fixação de conteúdo</a><br>

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

[Documentação PHP!](https://www.php.net/)

<hr>

<div id="aula02" align="center">
<h2>Aula 02: Embutindo blocos PHP em páginas HTML</h2>
</div>

Formas de inclusão do PHP em arquivos HTML:

<div align="center">

|       NOME       |             TAG              |          STATUS           |
| :--------------: | :--------------------------: | :-----------------------: |
|    Tag padrão    |  &lt;?php código aqui ?&gt;  |        Habilitada         |
| Tag de impressão | &lt;?= php código aqui ?&gt; |        Habilitada         |
|    Tag curta     |   &lt;? código aqui ?&gt;    |       Desabilitada        |
|    \*Asp tag     |   &lt;% código aqui %&gt;    | Descontinuada na versão 7 |

</div>

<hr>

<div id="aula03" align="center">
<h2>Aula 03: Habilitando e testando tags curtas (short_open_tag)</h2>
</div>

A tag curta não está mais disponível na versão 8 do PHP! Utilizar a tag padrão:

```php
<?php código aqui ?>
```

<hr>

<div id="aula04" align="center">
<h2>Aula 04: Saída de dados com echo() e print()</h2>
</div>

Ambos possuem o objetivo de imprimir conteúdos advindos do bloco de código PHP dentro do arquivo HTML que é entregue ao usuário.

Podemos utilizar aspas simples ou duplas.

A última instrução não precisa de ";".

Echo é um construtor de linguagem, enquanto o print inicialmente era uuma função.

```php
<?php
  echo 'Comando echo <br>';
  print 'Comando print<hr>';
?>
```

> arquivo echo_print.php

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

```php
// comentário de uma linha

# comentário de uma linha no estilo shell

/*
  Comentário de
  múltiplas linhas
*/
```

> arquivo comentarios.php

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

> arquivo variaveis.php

```php
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
```

<hr>

<div id="aula09" align="center">
<h2>Aula 09: Alterando valores de variáveis.</h2>
</div>

> arquivo variaveis.php

Em qualquer momento da lógica do script poderemos alterar os valores das variáveis. A alteração também pode ocorrer a nível de tipo (característico de linguagens de tipagem fraca).

<hr>

<div id="aula10" align="center">
<h2>Aula 10: Concatenação.</h2>
</div>

> arquivo concatenacao.php

A concatenação é realizada a partir do operador "**.**"!

Também podemos utilizar aspas duplas para fazer a concatenação de cadeias de caracteres com valores de variáveis.
(não se aplica a aspas simples!!!)

Como aspas simples não dão margem pra concatenação em seu interior (apenas com .), são mais rápidas que as duplas (que sempre serão verificadas)!

```php
$nome = "Mônica";
$idade = 31;
$cor = "rosa";

// para concatenação, usar o operador "."
echo "Olá, meu nome é " . $nome . "! Tenho " . $idade . " anos e minha cor favorita é " . $cor . ". :)";

echo "<br>";

// utilização de aspas duplas para concatenação
echo "Olá, $nome! Tudo bem?"
```

<hr>

<div id="aula11" align="center">
<h2>Aula 11: Variáveis constantes.</h2>
</div>

São variáveis cujos valores não podem ser modificados (não podem ser sobrepostos). Geralmente são utilizadas para parametrização de informações de ambiente da aplicação (ambiente de desenvolvimento). Dão uma maior segurança ao código (quando migramos ao ambiente de produção, por exemplo).

> arquivo variaveis_constantes.php

Para criação de variáveis constantes, utilizar a função **define()**, que tem dois parâmetros:

- nome da variável (em formato de string);
- e valor!

Sempre utilizar _caracteres maiúsculos_ (boas práticas)!
Não é necessário utilizar $.

```php
define('BD_URL', 'endereco_bd_dev');
define('BD_USUARIO', 'usuario_dev');
define('BD_SENHA', 'senha_dev');

echo BD_URL . '<br>';
echo BD_USUARIO . '<br>';
echo BD_SENHA;
```

<hr>

<div id="aula12" align="center">
<h2>Aula 12: If/else parte 1 - Introdução.</h2>
</div>

É uma estrutura de controle, que permite definir o fluxo que a aplicação tomará, a partir de uma determinada condição.
A instrução else é opcional.

Sintaxe:

```
if (condição) {
  // trecho de código que será executado
} else {
  // trecho de código que será executado
}
```

Encadeado:

```
if (condição) {
  // trecho de código que será executado
} else if (condicão) {
  // trecho de código que será executado
} else {
  // trecho de código que será executado
}
```

<hr>

<div id="aula13" align="center">
<h2>Aula 13: Operadores de comparação (condicionais).</h2>
</div>

Também conhecidos como operadores relacionais, são capazes de formar as expressões condicionais, que serão colocadas dentro dos comandos if.

São eles (9):

| OPERADOR     | REPRESENTAÇÃO | SIGNIFICADO                                                            |
| ------------ | :-----------: | ---------------------------------------------------------------------- |
| Igual        |      ==       | Verifica se os valores comparados são iguais                           |
| Idêntico     |      ===      | Verifica se os valores comparados são iguais e do mesmo tipo           |
| Diferente    |      !=       | Verifica se os valores comparados são diferentes                       |
| Diferente    |   &lt;&gt;    | Verifica se os valores comparados são diferentes                       |
| Não idêntico |      !==      | Verifica se os valores comparados são diferentes e de tipos diferentes |
| Menor        |     &lt;      | Verifica se o valor da esquerda é menor que o da direita               |
| Maior        |     &gt;      | Verifica se o valor da esquerda é maior que o da direita               |
| Menor igual  |     &lt;=     | Verifica se o valor da esquerda é menor ou igual ao da direita         |
| Maior igual  |     &gt;=     | Verifica se o valor da esquerda é maior ou igual ao da direita         |

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

| OPERADOR |   REPRESENTAÇÃO    | SIGNIFICADO                                         |
| :------: | :----------------: | --------------------------------------------------- |
|    E     |     AND ou &&      | V se todas as expressões forem V                    |
|    OU    | OR ou &#124;&#124; | V se pelo menos uma das expressões for V            |
|   Xor    |        XOR         | V apenas se uma das expressões for V, mas não ambas |
| Negação  |         !          | Inverte o resultado da expressão                    |

<hr>

<div id="aula16" align="center">
<h2>Aula 16: If/else parte 3 - Praticando com operadores lógicos.</h2>
</div>

> arquivo ifelse_operadores_logicos.php

Operadores lógicos podem conectar de 2 a n operações de comparação!

Os parênteses permitem estabelecer precedência (o interpretador lerá primeiro o que está nos parênteses, e inicialmente os mais internos).

```php
// E - && (retorna V se todos os resultados forem V)

if(5 == 3 && 10 > 3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
```

```php
// OU - || (retorna V se pelo menos um dos resultados for V)

if(5 == 5 || 10 < 3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
```

```php
// XOR - XOR (V se uma das expressões for V e a outra F, ou vice-versa).
if(5 == 5 XOR 10 > 3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
```

```php
// negação - ! (inverte o resultado da expressão)
if(!('a' == 'b')) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}
```

<hr>

<div id="aula17" align="center">
<h2>Aula 17: If/else parte 4 - Praticando um pouco mais.</h2>
</div>

> arquivo ifelse_praticando_mais_um_pouco.php

Exemplo de uma situação em um e-commerce, onde: é dado frete gratuito se o usuário possuir o cartão da loja E se o valor da compra for maior que 100 reais.

Obs: se for testar variável do tipo booleana dentro de um operador lógico, não precisamos compararcom "==", apenas indicar a variável.

```php
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
```

<hr>

<div id="aula18" align="center">
<h2>Aula 18: If/else parte 5 - Condições encadeadas.</h2>
</div>

> arquivo ifelse_praticando_mais_um_pouco.php

```php
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
```

<hr>

<div id="aula19" align="center">
<h2>Aula 19: Operador ternário.</h2>
</div>

Permite, com base em determinada condição, seguir ou não um fluxo. É mais limitado, pois retorna apenas uma instrução quando V ou F. Entretanto, são menos verbosos.

Sintaxe:

```
// <condição> ? true : false
```

Exemplo (aplicando com base no exercício da aula anterior):

```php
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
```

Apesar de não ser uma prática recomendada, há a possibilidade de utilizar operadores ternários encadeados (com parênteses).

<hr>

<div id="aula20" align="center">
<h2>Aula 20: Atividades para fixação do conteúdo.</h2>
</div>

> arquivo atividade_fixacao_1.php

Enunciado:
"Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis $idade e $peso no processo. Neste primeiro momento, faca a atribuição de valores às variáveis de forma estática, ou seja, no processo de atribuição.

Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos".

Resolução:

```php
$idade = 90;
$peso = 45;

if ($peso >= 50 && ($idade >= 16 && $idade <= 69)) {
  echo 'Atende aos requisitos!';
} else {
  echo 'Não atende aos requisitos...';
}
```

<hr>

<div id="aula21" align="center">
<h2>Aula 21: Switch.</h2>
</div>

É um condicional; visa, com base em determinada condição, seguir determinado fluxo dentro da aplicação.

É mais restrito, pois permite apenas comparar idênticos. Bom em caso de organização de um meno, por exemplo.

Exemplo:

```php
$opcao = 2

switch ($opcao) {
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
```

<hr>

<div id="aula22" align="center">
<h2>Aula 22: Switch na prática.</h2>
</div>

> arquivo switch.php

A comparação é por **igualdade**, e não por identidade (diferente do JS)!!! Faz um casting de tipos, podendo comparar o int 2 com string '2', por exemplo.

Nos cases, podemos utilizar valores que não são numéricos (como strings) - há flexibilidade no PHP.

```php
$parametro = 'Mônica';

switch ($parametro) {

case 1:
  echo 'Entrou no case 1';
  break;

case 2:
  echo 'Entrou no case 2';
  break;

case 3:
  echo 'Entrou no case 3';
  break;

default:
  echo 'Entrou no default!';
  break;
  }
```

OBS: quando o valor booleano é true, o PHP retorna o resultado "1".

<hr>

<div id="aula23" align="center">
<h2>Aula 23: Casting de tipos com (int), (bool), (float) e (string).</h2>
</div>

Casting de tipos consiste na conversão de uma determinada variável de um tipo para outro.

A variável pode ter seu tipo modificado ou no processo de atribuição ou no contexto em que está sendo interpretada pelo PHP.

> arquivo casting_tipos.php

A função gettype() espera um parâmetro e retorna o seu tipo. É importante para debug.

Para realizar o casting:

```
$variável_que_queremos_converter = (tipo de variável esperada) $nova_variavel
```

O tipo "real" não é mais suportado no PHP; utilizar double ou float.

```php
//gettype() - retorna o tipo de uma variável
$valor = 10;
echo $valor . ', ' . gettype($valor);

echo '<br>';

// para converter de int para float
$valor2 = (float)$valor;
echo $valor2 . ', ' . gettype($valor2);

echo '<br>';

// para converter para string
$valor3 = (string)$valor;
echo $valor3 . ', ' . gettype($valor3);
```

<hr>

<div id="aula24" align="center">
<h2>Aula 24: Operadores aritméticos.</h2>
</div>

Operadores matemáticos que permitem efetuar cálculos.

|   OPERADOR    | REPRESENTAÇÃO | FUNÇÃO                                     |
| :-----------: | :-----------: | ------------------------------------------ |
|    Adição     |       +       | Soma valores                               |
|   Subtração   |       -       | Diferença entre valores                    |
| Multiplicação |      \*       | Produto dos valores                        |
|    Divisão    |       /       | Quociente dos valores                      |
|    Módulo     |       %       | Resto existente em uma operação de divisão |

<hr>

<div id="aula25" align="center">
<h2>Aula 25: Praticando com operadores aritméticos.</h2>
</div>

> arquivo operadores_aritmeticos.php

```php

$num1 = 12;
$num2 = 6;

// adição
echo "A soma entre $num1 e $num2 é " . ($num1 + $num2) . '!';
echo '<br>';

// subtração
echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2) . '!';
echo '<br>';

// divisão
echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2) . '!';
echo '<br>';

// muntiplicação
echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2) . '!';
echo '<br>';

// módulo
echo "O módulo entre $num1 e $num2 é " . ($num1 % $num2) . '!';
```

<hr>

<div id="aula26" align="center">
<h2>Aula 26: Operações aritméticas na atribuição de valores.</h2>
</div>

> arquivo operadores_atribuicao_aritmeticos.php

Podemos combinar o operador aritmético com a atribuição: primeiro vem o operador (à esquerda), em seguida a atribuição (+=, por exemplo). Isso deixa a sintaxe mais enxuta!

<hr>

<div id="aula27" align="center">
<h2>Aula 27: Operadores de incremento/decremento.</h2>
</div>

|    OPERADOR    | REPRESENTAÇÃO | FUNÇÃO                                   |
| :------------: | :-----------: | ---------------------------------------- |
| Pré-incremento |     ++$a      | Add uma unidade antes de retornar $a     |
| Pós-incremento |     $a++      | Retorna $a e depois adiciona uma unidade |
| Pré-decremento |     --$a      | Diminui uma unidade antes de retornar $a |
| Pós-decremento |     $a--      | Retorna $a e depois diminui uma unidade  |

<hr>

<div id="aula28" align="center">
<h2>Aula 28: Praticando com operadores de incremento/decremento.</h2>
</div>

> arquivo operadores_incremento_decremento.php

```php
<h3>Pós-incremento</h3>
<?php
$a = 7;
echo "O valor contido em a é $a <br>";
echo 'O valor contido em a após o incremento (a++) ' . $a++ . ' <br>';
echo "O atualizado é  $a <br>";
?>

<h3>Pré-incremento</h3>
<?php
$a = 7;
echo "O valor contido em a é $a <br>";
echo 'O valor contido em a pré incremento (++a) ' . ++$a . ' <br>';
echo "O atualizado é  $a <br>";
?>

<h3>Pós-decremento</h3>
<?php
$a = 7;
echo "O valor contido em a é $a <br>";
echo 'O valor contido em a após o decremento (a--) ' . $a-- . ' <br>';
echo "O atualizado é  $a <br>";
?>

<h3>Pré-decremento</h3>
<?php
$a = 7;
echo "O valor contido em a é $a <br>";
echo 'O valor contido em a pré decremento (--a) ' . --$a . ' <br>';
echo "O atualizado é  $a <br>";
?>
```

<hr>

<div id="aula29" align="center">
<h2>Aula 29: Funções - Introdução.</h2>
</div>

As funções permitem estabelecer subprogramas com objetivos específicos, que podem ser chamados sempre que necessários dentro da lógica, evitando redundâncias no código!

Tem a função de encapsular um bloco de códigos com um objetivo definido.

As funções podem ser do tipo void ou com retorno!

Exemplos:

```php
function exibirBoasVindas () {
  echo "Bem-vindo ao Curso de PHP";
}

function calcularAreaTerreno ($largura, $comprimento) {
  $area = $largura * $comprimento;
  return $area;
}
```

<hr>

<div id="aula30" align="center">
<h2>Aula 30: Funções - Prática.</h2>
</div>

> arquivo funcoes.php

(aplicação dos exemplos da aula anterior)

<hr>

<div id="aula31" align="center">
<h2>Aula 31: Atividade para fixação de conteúdo.</h2>
</div>

Enunciado:

Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por um parâmetro.

| BASE DE CÁLCULO                | ALÍQUOTA |
| ------------------------------ | -------- |
| Até 1903,98                    | Isento   |
| De 1903,99 até R$ 2.826,65     | 7,5%     |
| De R$ 2.826,66 até R$ 3.751,05 | 15%      |
| De R$ 3.751,06 até R$ 4.664,68 | 22,5%    |
| Acima de 4.664,68              | 27,5%    |

Resolução:

```php
function calcularImposto ($salario) {

$imposto = 0;

if ($salario <= 1903.98) {
  $imposto = 0;
} else if ($salario >= 1903.99 && $salario <= 2826.65) {
  $imposto = ($salario * 7.5)/100;
} else if ($salario >= 2826.66 && $salario <= 3751.05) {
  $imposto = ($salario * 15)/100;
} else if ($salario >= 3751.06 && $salario <= 4664.08) {
  $imposto = ($salario * 22.5)/100;
} else {
  $imposto = ($salario * 27.5)/100;
}
return $imposto;
}

echo "O imposto será de R$ " . calcularImposto(2000) . ",00.";
```

<hr>

<div id="aula32" align="center">
<h2>Aula 32: Funções nativas para manipular strings.</h2>
</div>

> arquivo funcoes_strings.php

Funções estudadas em aula:

- strtolower($texto): transforma todos os caracteres da string em minúsculos.

- strtoupper($texto): transforma todos os caracteres da string em maiúsculos.

- ucfirst($texto): transforma o primeiro caracter da string em maiúsculo.

- strlen($texto): conta a quantidade de caracteres de uma string.

- str_replace(&lt;procura por&gt;, &lt;substitui por&gt;, $texto): substitui uma cadeia de caracteres por outra dentro de uma string.

- substr($texto, &lt;posição inicial&gt;, &lt;qtde caracteres&gt;): retorna parte de uma string.

```php
$texto = "monica QUINTAL";
echo $texto;
echo "<br>";

// string to lower:
echo strtolower($texto);
echo "<br>";

// string to upper
echo strtoupper($texto);
echo "<br>";

// uppercase first
echo ucfirst($texto);
echo "<br>";

// string length - conta n° de caracteres (incluindo espaços em branco)
echo strlen($texto);
echo "<br>";

// string replace - é case sensitive.
echo str_replace("QUINTAL", "zungalo", $texto);
echo "<br>";

// substr (sub string)
echo substr($texto, 0, 6);
```

<hr>

<div id="aula33" align="center">
<h2>Aula 33: Funções nativas para tarefas matemáticas.</h2>
</div>

> arquivo funcoes_matematicas.php

Funções estudadas em aula:

- ceil($numero): arredonda o valor para cima.

- floor($numero): arredonda o valor para baixo.

- round($numero): arredonda o valor com base nas casas decimais.

- rand(): gera um número aleatório.

- sqrt($numero): retorna a raiz quadrada.

```php

$numero = 9.999;

// ceil() - arredonda para cima
echo "ceil(9.999) = " . ceil($numero);

// floor() - arredonda para baixo
echo "floor(9.999) = " . floor($numero);

/* round() - arredonda c/ base na fração:
  de .0 a .4 - p/ bx
  de .5 pra cima - p/ cima */
echo "round(9.999) = " . round($numero);

/* rand() - gera valor aleatorio (de 0 até randmax)
  *** a função nativa getrandmax() retorna esse valor máximo! */
echo "rand(): " . rand();
echo "getrandmax(): " . getrandmax();

// podemos passar como parâmetros para rand(<início do intervalo>, <final do intervalo>)
echo "rand(10, 20): " . rand(10, 20);
echo "getrandmax(): " . getrandmax();

// sqrt() - retorna raiz quadrada
echo "sqtr(121) = " . sqrt(121);
```

<hr>

<div id="aula34" align="center">
<h2>Aula 34: Funções nativas para manipular datas.</h2>
</div>

> arquivo funcoes_data.php

Observação importante: O PHP possui uma configuração de timezone (zona) que define a aplicação do tempo sobre a data previamente carregada do sistema operacional!

Funções estudadas em aula:

- date(formato): recupera a data atual. Verificar na [documentação](https://www.php.net/manual/en/datetime.format.php) a forma correta de indicar os parâmetros/fomato.

```php
echo "F (mês), " . "d (dia), " . "o (ano) e " . "D (dia)";
echo "<br>";
echo date('F d o D');

echo "(dia)/" . "(mês)/" . "(ano)" . " " . " hora:" . "minutos";
echo "<br>";
echo date('d/m/Y H:i');
```

- date_default_timezone_get(timezone): recupera o timezone default da aplicação.

```php
echo "timezone: ";
echo date_default_timezone_get();
echo "<br>";
echo date('d/m/Y H:i');
```

- date*default_timezone_set(timezone): atualiza o timezone default da aplicação.
  (podemos fazer a modificação de timezone diretamente no ambiente em que o PHP está instalado OU no tempo de execução, utilizando a instrução acima)
  Acessar a [documentação](https://www.php.net/manual/en/timezones.php) para verificar as timezones possíveis.
  \_America/Sao_Paulo* é o timezone oficial do BR.

```php
date_default_timezone_set('America/Sao_Paulo');
echo "timezone set: ";
echo date_default_timezone_get();
echo "<br>";
echo date('d/m/Y H:i');
```

- strtotime(data): transformar datas textuais em segundos.

```php
// padrão computacional: ano-mês-dia
$data_inicial = '2023-01-01';
$data_final = '2023-01-15';

// descobrir quantos dias há entre a data inicial e a final

//timestamp = 01/01/1970 (início da era Unix)

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

// calcula tempo entre data inicial e 01/01/1970
// JS retorna milissegundos; php retorna segundos!!!

echo $data_inicial . " - " . $time_inicial . " segundos." . "<br>";

echo $data_final . " - " . $time_final . " segundos." . "<br>";

$diferenca_times = abs($time_final - $time_inicial);

// função abs: converte o resultado em seu respectivo valor absoluto (positivo), caso necessário

echo "A diferença em segundos entre a data inicial e final é: " . $diferenca_times . "<br>";

// 1 dia = 24 horas * 60 minutos * 60 segundos
// um dia possui 86400 segundos!
$diferenca_em_dias = $diferenca_times / 86400;

echo "A diferença em segundos entre a data inicial e final é: " . $diferenca_em_dias;
```

<hr>

<div id="aula35" align="center">
<h2>Aula 35: Array básico - Introdução.</h2>
</div>

Arrays são listas ordenadas; são variáveis que nos permitem relacionar itens associados a índices.

Uma única variável armazena diversos valores!

Exemplo:

```php
$lista_frutas[1] = 'Banana';
$lista_frutas[2] = 'Maçã';
$lista_frutas[3] = 'Morango';
$lista_frutas[4] = 'Uva';
```

<hr>

<div id="aula36" align="center">
<h2>Aula 36: Array básico - Prática.</h2>
</div>

> arquivo array_basico.php

Importante:

- "array()" com a minúsculo!
- itens separados por vírgulas.
- cada item do array recebe uma chave numérica (ou índice), que vai de 0 a n!

Para fazer testes e debugar, podemos utilizar duas funções:

- **var_dump(&lt;array&gt;)**
  - dá detalhes adicionais;
  - dá acesso ao tipo de dado que é representado em cada índice.
- **print_r(&lt;array&gt;)**

Utilizar echo "&lt;pre&gt;" para auxiliar na formatação do conteúdo do array e facilitar na visualização!

Para **incluir novos índices em um array já criado**:

- abrir e fechar colchetes;
- na sequência, atribuir novo valor.

Em vez de indicar a palavra "array", podemos apenas abrir e fechar colchetes! Exemplo:

```php
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
```

Para **recuperar um item específico** do array:

- recuperar a variável que contém o array e imprimir o valor contido em determinado índice; exemplo:

```php
echo $lista_frutas[2];
```

Praticando:

```php
// Arrays sequenciais (numéricos)
$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
$lista_frutas[] = 'Abacaxi';

echo '<pre>';
var_dump($lista_frutas);
echo '<hr>';
echo '<pre>';
print_r($lista_frutas);

// Para impromir um item específico:
echo '<hr>';
echo $lista_frutas[2];
echo '<hr>';

// Arrays associativos - a diferença é que os indices serão explícitos (nós os definiremos!!!)
$lista_frutas_associativo = array('a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', '2' => 'Uva');
$lista_frutas_associativo[] = 'Abacaxi';

echo '<pre>';
var_dump($lista_frutas_associativo);
echo $lista_frutas_associativo['x'];
```

<hr>

<div id="aula37" align="center">
<h2>Aula 37: Array multidimensional.</h2>
</div>

Sâo arrays de arrays!

Através de uma variável i ou índice, podemos acessar outro array (encadear no índice outros arrays, criando quantas dimensões forem necessárias para atender às necessidades)!

> arquivo array_multidimensional.php

Praticando:

```php
    // array $lista_coisas
    $lista_coisas = array();

    // arrays associativos frutas e pessoas
    $lista_coisas['frutas'] = array('1' => 'Banana', '2' => 'Maçã', '3' => 'Morango', '4' =>  'Uva');

    $lista_coisas['pessoas'] = array('1' => 'João', '2' => 'José', '3' => 'Maria');

    // imprimindo o array $lista_coisas
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';
    // para recuperar valores específicos
    echo $lista_coisas['frutas'][3];
    echo '<br>';
    echo $lista_coisas['pessoas'][2];
```

<hr>

<div id="aula38" align="center">
<h2>Aula 38: Array - Métodos de pesquisa.</h2>
</div>

> arquivo array_pesquisa.php

1. Método in_array():

Retorna **true ou false** para a existência do que está sendo procurado!

```php
in_array(<item que estamos procurando>, <array>);
```

**Importante:**

- Se o retorno for true: texto impresso será 1;
- Se o retorno for falso: texto impresso será 'vazio'.
  Podemos criar uma lógica que garante um retorno mais intuitivo, atribuindo o método in_array() a uma ariável, e associá-la a uma estrutura if/else, por exemplo, como abaixo:

```php
$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

$existe = in_array('Laranja', $lista_frutas);

if ($existe) { //true
  echo 'Sim, o valor pesquisado existe no array! :)';
} else { // false
  echo 'Não, o valor pesquisado não existe no array! :(';
}
```

2. Método array_search():

Retorna o **índice** do valor pesquisado, caso ele exista.

```php
array_search(<item que estamos procurando>, <array>);
```

**Importante:**

- Se o item existir no array: retorna o índice;
- Se não existir: retorna null (não é necessariamente o valor false!!!). A representação textual é vazio.
  Podemos também utilizar if/else para apresentar um texto mais intuitivo ao usuário, como abaixo:

```php
$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

$existe = array_search('Laranja', $lista_frutas);

if ($existe != null) {
  echo 'Sim, o valor pesquisado existe no array! :)';
} else {
  echo 'Não, o valor pesquisado não existe no array! :(';
}
```

3. Para arrays multidimensionais:

Na essência, trata-se de um array normal para a pesquisa, pois o método atuará sobre um array específico!

Exemplo:

```php
$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

$lista_coisas = [
  'frutas' => $lista_frutas,
  'pessoas' => ['João', 'Maria']
];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo in_array('Uva', $lista_coisas['frutas']);
```


<hr>

<div id="aula39" align="center">
<h2>Aula 39: Extra - False, Null e Empty.</h2>
</div>

São valores especiais, que possuem diferenças sutis entre si, sendo fatores potenciais de bugs!

- false (true/false) - tipo de variável boolean;
- null e empty - são valores especiais.

> arquivo false_null_empty.php

1. null:

Para verificar se o valor é null, podemos utilizar a função nativa **is_null(&lt;variável&gt;)**, como abaixo:

```php
$funcionario1 = null;
$funcionario2 = '';

// valores null
if (is_null($funcionario1)) {
  echo 'Sim, a variável é null.';
} else {
  echo 'Não, a variável não é null.';
}

echo '<br>';

if (is_null($funcionario2)) {
  echo 'Sim, a variável é null.';
} else {
  echo 'Não, a variável não é null.';
}
```

Nos casos acima, temos o retorno de que $funcionario1 é null, e $funcionario2, não.

1. empty (vazio):

Para verificar se o valor é empty, podemos utilizar a função nativa **empty(&lt;variável&gt;)**, como abaixo:

```php
$funcionario1 = null;
$funcionario2 = '';

// valores vazio?
if (empty($funcionario1)) {
  echo 'Sim, a variável está vazia.';
} else {
  echo 'Não, a variável não está vazia.';
}

echo '<br>';

if (empty($funcionario2)) {
  echo 'Sim, a variável está vazia.';
} else {
  echo 'Não, a variável não está vazia.';
}
```

Nos casos acima, temos o retorno de ambas as variáveis estão vazias!!!

Ou seja, no empty, o valor null também é considerado vazio. **_Portanto, null é exclusivamente null, enquanto empty pode ser vazio ou null!_**

3. false:

False não é considerado null, mas é considerado vazio.


<hr>

<div id="aula40" align="center">
<h2>Aula 40: Funções nativas para manipular arrays.</h2>
</div>

> arquivo funcoes_arrays.php

Algumas das principais:

- is_array(array): verifica se o parâmetro é um array - retorna true/false.

~~~php
$array = array();
$retorno = is_array($array);

if ($retorno) {
  echo 'Sim, é um array!';
} else {
  echo 'Não, não é um array.';
}  
~~~

- array_keys(array): retorna todas as chaves de um array.

~~~php
$array = [1 => 'a', 7 => 'b', 18 => 'c'];

$chaves_array = array_keys($array);
echo '<pre>';
print_r ($chaves_array);
echo '<pre>';
~~~

- sort(array): ordena um array e reajusta seus índices (sequência alfabética). Retorna true/false para a tentativa de ordenação!

~~~php
$array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte');

sort($array);
echo '<pre>';
print_r ($array);
echo '<pre>';
~~~

- asort(array): ordena um array preservando os índices. Retorna true/false para a tentativa de ordenação! Coloca em ordem alfabética, mas reserva a relação índice-valor!

~~~php
$array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte');

//asort(array)
asort($array);
echo '<pre>';
print_r ($array);
echo '<pre>';
~~~

- count(array): conta a quantidade de elementos de um array.

~~~php
$array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte');
echo '<pre>';
print_r ($array);
echo count($array);
echo '</pre>';
~~~

- array_merge(array): funde um ou mais arrays.

~~~php
$array1 = ['osx', 'windows'];
$array2 = ['linux'];
$array3 = ['solaris'];

$novo_array = array_merge($array1, $array2, $array3);
echo '<pre>';
print_r ($novo_array);
echo '<pre>';
~~~

- explode(array): divide uma string baseada em um delimitador. O retorno é dado em um array. Nesse caso '/' é o delimitador.

~~~php
$string = '29/12/1991';
$array_retorno = explode('/', $string);

echo '<pre>';
print_r ($array_retorno);
echo '<pre>';
~~~

- implode(array): junta elementos de um array em uma string.

~~~php
$array = ['a', 'b', 'x', 'y'];
$string_retorno = implode(',', $array);

echo '<pre>';
print_r ($string_retorno);
echo '<pre>';
~~~


<hr>

<div id="aula41" align="center">
<h2>Aula 41: Loops parte 1 - Introdução.</h2>
</div>

Estruturas de repetição (também chamadas loops ou laços) são estruturas que permitem a repetição de um comando ou bloco de código até atender determinada condição!

São utilizadas para recuperar informações contidas em arquivos, para exibir informações recuperadas em BDs, realizar cálculos, etc!

Tornam os códigos menos verbosos, pois modificaremos apenas os valores dinâmicos.

Laços, de modo geral, esperam um comando de parada, indicando que devem ser interrompidos, o que evita o looping infinito!

São elas:
- while;
- do while;
- for;
- foreach.


<hr>

<div id="aula42" align="center">
<h2>Aula 42: Loops parte 2 - While.</h2>
</div>

Sintaxe:

~~~php
while (condição) {
  bloco de código
  comando de parada
}
~~~

Exemplo:

~~~php
while ($num < 10) {
  echo "$num <br>";
  $num++; // critério de parada
}
~~~

Podemos também utilizar os comandos:
- break: interrompe a execução do laço, independente do critério estabelecido.

~~~php
$num = 1;
echo "Início do loop <br>";

while ($num < 50) {
  $num += 5; // critério de parada
  echo "$num <br>";
  break;
}
echo "Fim do loop";
~~~

- continue: não interrompe a repetição do laço, apenas pula para a próxima iteração do laço (descarta o que está a seguir até o fechamento do bloco)!

~~~php
$num = 1;
echo "Início do loop <br>";

while ($num < 10) {

  $num += 1;
  
  if($num == 2 || $num == 6) {
    continue;
  }
  echo "$num <br>";
}
echo "Fim do loop";
~~~


<hr>

<div id="aula43" align="center">
<h2>Aula 43: Loops parte 3 - Do while.</h2>
</div>