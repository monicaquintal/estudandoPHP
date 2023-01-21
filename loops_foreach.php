<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Loops: Foreach.</title>
  </head>

  <body>
    <?php

    $itens = array('Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';
    echo '<hr>';

    foreach($itens as $item) {
      echo "$item";

      if ($item == 'Mesa') {
        echo '(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras*)';
      } 

      echo '<br>';

    }

    ?>
    
  </body>
</html>