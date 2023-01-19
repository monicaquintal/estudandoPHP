<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - False, null e empty.</title>
  </head>

  <body>
    <?php

    // false (true/false) - tipo de variável boolean
    // null e empty - valores especiais
    
    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    // valores null
    if (is_null($funcionario1)) {
      echo 'Sim, a variável é null.';
    } else {
      echo 'Não, a variável não é null.';
    }

    echo '<br>';

    if (is_null($funcionario2)) {
      echo 'Sim, a variável é null.';
    } else {
      echo 'Não, a variável não é null.';
    }

    echo '<br>';

    if (is_null($funcionario3)) {
      echo 'Sim, a variável é null.';
    } else {
      echo 'Não, a variável não é null.';
    }


    echo '<hr>';


    // valores vazio?
    if (empty($funcionario1)) {
      echo 'Sim, a variável está vazia.';
    } else {
      echo 'Não, a variável não está vazia.';
    }

    echo '<br>';

    if (empty($funcionario2)) {
      echo 'Sim, a variável está vazia.';
    } else {
      echo 'Não, a variável não está vazia.';
    }

    echo '<br>';

    if (empty($funcionario3)) {
      echo 'Sim, a variável está vazia.';
    } else {
      echo 'Não, a variável não está vazia.';
    }

    ?>
    
  </body>
</html>