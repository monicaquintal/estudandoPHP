<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Array básico</title>
  </head>

  <body>
    <?php

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
    echo '<hr>';
    ?>
    
  </body>
</html>