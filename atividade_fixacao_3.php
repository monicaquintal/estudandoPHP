<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Atividade para fixação 3.</title>
  </head>

  <body>
    <?php

    $numeros = [];

    for ($i = 0; $i < 6; $i++) {
      $num = rand(1, 60);

      if (!in_array($num, $numeros)) {
        $numeros[] = $num;
      }
    }

    echo '<pre>';
    print_r($numeros);
    echo '</pre>';

    ?>
    
  </body>
</html>