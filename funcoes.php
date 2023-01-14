<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Funções</title>
  </head>

  <body>
    <h2>Exemplo 1:</h2>
    <?php
  
    //função tipo void (não possui retorno)
    function exibirBoasVindas () {
      echo 'Bem-vindo ao Curso de PHP! <br>';
    }

    exibirBoasVindas();
    exibirBoasVindas();
    exibirBoasVindas();

    ?>
  
  <h2>Exemplo 2:</h2>
    <?php

    function calcularAreaTerreno ($largura, $comprimento) {
      $area = $largura * $comprimento;
      return $area;
    }

    echo calcularAreaTerreno(10, 20) . '<br>';
    echo calcularAreaTerreno(20, 15) . '<br>';
    echo calcularAreaTerreno(15, 30) . '<br>';
    echo calcularAreaTerreno(50, 10) . '<br>';

    ?>  

  </body>
</html>