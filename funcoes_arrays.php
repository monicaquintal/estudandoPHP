<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Funções nativas para manipulação de arrays.</title>
  </head>

  <body>
    <?php

    /* 
    $array = array('notebook', 'teclado');
    
    //is_array(array)
    $retorno = is_array($array);

    if ($retorno) {
      echo 'Sim, é um array!';
    } else {
      echo 'Não, não é um array.';
    }
    */

    /*
    $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
    print_r ($array);
    echo '<pre>';

    //array_keys()
    $chaves_array = array_keys($array);
    echo '<pre>';
    print_r ($chaves_array);
    echo '<pre>';
    */

    /*
    $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte');
    echo '<pre>';
    print_r ($array);
    echo '<pre>';

    //sort(array)
    sort($array);
    echo '<pre>';
    print_r ($array);
    echo '<pre>';
    */

    /*
    $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte');
    echo '<pre>';
    print_r ($array);
    echo '<pre>';

    //asort(array)
    asort($array);
    echo '<pre>';
    print_r ($array);
    echo '<pre>';
    */

    /*
    $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte');
    echo '<pre>';
    print_r ($array);
    echo count($array);
    echo '</pre>';
    */

    /*
    $array1 = ['osx', 'windows'];
    $array2 = ['linux'];
    $array3 = ['solaris'];

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r ($novo_array);
    echo '<pre>';
    */

    /*
    $string = '29/12/1991';
    $array_retorno = explode('/', $string);

    echo '<pre>';
    print_r ($array_retorno);
    echo '<pre>';
    */

    $array = ['a', 'b', 'x', 'y'];
    $string_retorno = implode(',', $array);

    echo '<pre>';
    print_r ($string_retorno);
    echo '<pre>';
    ?>
    
  </body>
</html>