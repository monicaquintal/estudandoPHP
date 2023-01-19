<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Array e Métodos de Pesquisa</title>
  </head>

  <body>
    <?php

    // MÉTODOS DE PESQUISA: in_array() e array_search()

    $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    echo '<hr>';

    // in_array()
    echo in_array('Abacate', $lista_frutas);
    echo '<br>';
    echo in_array('Maçã', $lista_frutas);
    echo '<br>';

        // criando uma lógica para o retorno do in_array()
    $existe = in_array('Laranja', $lista_frutas);

    if ($existe) {
      echo 'Sim, o valor pesquisado existe no array! :)';
    } else {
      echo 'Não, o valor pesquisado não existe no array! :(';
    }
    echo '<hr>';

    // array_search()
    $teste = array_search('Banana', $lista_frutas);

    if ($teste != null) {
      echo 'Sim, o valor pesquisado existe no array! :)';
    } else {
     echo 'Não, o valor pesquisado não existe no array! :(';
    }
    echo '<hr>';

    //arrays multidimensionais
    $lista_coisas = [
      'frutas' => $lista_frutas,
      'pessoas' => ['João', 'Maria']
    ];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo '<hr>';

    echo in_array('Uva', $lista_coisas['frutas']);
    ?>
    
  </body>
</html>