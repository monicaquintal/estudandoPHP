<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Funções matemáticas.</title>
  </head>

  <body>
    <?php
    
    $numero = 9.999;
    
    // ceil() - arredonda para cima
    echo "ceil(9.999) = " . ceil($numero);
    echo "<br>";

    // floor() - arredonda para baixo
    echo "floor(9.999) = " . floor($numero);
    echo "<br>";

    /* round() - arredonda c/ base na fração:
     de .0 a .4 - p/ bx
     de .5 pra cima - p/ cima */  
    echo "round(9.999) = " . round($numero);
    echo "<br>";

    /* rand() - gera valor aleatorio
     (de 0 até randmax)
      *** a função nativa getrandmax() retorna esse valor máximo! */
    echo "rand(): " . rand();
    echo "<br>";
    echo "getrandmax(): " . getrandmax();
    echo "<br>";
    // podemos passar como parâmetros para rand(<início do intervalo>, <final do intervalo>)
    echo "rand(10, 20): " . rand(10, 20);
    echo "<br>";
    echo "getrandmax(): " . getrandmax();
    echo "<br>";

    // sqrt() - retorna raiz quadrada
    echo "sqtr(121) = " . sqrt(121);

    ?>
    
  </body>
</html>