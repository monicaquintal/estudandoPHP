<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Loops: While.</title>
  </head>

  <body>
    <?php

    $num = 1;

    echo "Início do loop <br>";
    //operadores de comparação ou lógicos
    while ($num < 10) {

      $num += 1;
      
      if($num == 2 || $num == 6) {
        continue;
      }
      echo "$num <br>";
    }

    echo "Fim do loop";

    ?>
    
  </body>
</html>