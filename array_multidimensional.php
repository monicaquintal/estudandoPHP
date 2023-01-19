<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Array multidimensional</title>
  </head>

  <body>
    <?php
    // array lista_coisas
    $lista_coisas = array();

    // arrays associativos
    $lista_coisas['frutas'] = array('1' => 'Banana', '2' => 'Maçã', '3' => 'Morango', '4' =>  'Uva');

    $lista_coisas['pessoas'] = array('1' => 'João', '2' => 'José', '3' => 'Maria');

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';
    // para recuperar valores específicos
    echo $lista_coisas['frutas'][3];
    echo '<br>';
    echo $lista_coisas['pessoas'][2];

    ?>
    
  </body>
</html>