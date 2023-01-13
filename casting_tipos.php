<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Casting tipos</title>
  </head>

  <body>
    <?php

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

    ?>
    
  </body>
</html>