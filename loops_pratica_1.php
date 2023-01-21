<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Loops: Praticando.</title>
  </head>

  <body>
    <?php

    $registros = array(
      array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteudo Noticia 1'),
      array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo Noticia 2'),
      array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteudo Noticia 3'),
      array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteudo Noticia 4'),
      array('titulo' => 'Título notícia 5', 'conteudo' => 'Conteudo Noticia 5')
      );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    echo '<hr>';

    /* 
    $idx = 0; 
    comentado para testar o for (utilizado fora do laço apenas no while e do while)
    */

    // função count()
    echo 'O array possui ' . count($registros) . ' registros.';
    echo "<hr>";

    /* Implementando a lógica com while:

    while($idx < count($registros)) {
      echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
      echo "<hr>";
      $idx++;
    }
    */



    /* Implemetando a mesma lógica com do while:

    do {
      echo '<h2>' . $registros[$idx]['titulo'] . '</h2>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
      echo "<hr>";
      $idx++;
    } while ($idx < count($registros));
    */



    /* Implemetando a mesma lógica com for:
    */

    for ($idx = 0; $idx < count($registros); $idx++) {
      echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
      echo "<hr>";
    }

    ?>
    
  </body>
</html>