<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Loops: Prática 2.</title>
  </head>

  <body>
    <?php

    $funcionarios = array(
      array('nome' => 'João', 'salario' => 2500, 'data nascimento' => '01/01/2001'), 
      array('nome' => 'Maria', 'salario' => 3000, 'data nascimento' => '02/02/2002'),  
      array('nome' => 'Julia', 'salario' => 2200, 'data nascimento' => '03/03/2003'), 
    );

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';
    echo '<hr>';


    foreach ($funcionarios as $idx => $funcionario) {
      
      foreach($funcionario as $idx2 => $valor) {

        echo "$idx2 - $valor <br>";

      }
      echo '<hr>';
    }

    ?>
    
  </body>
</html>