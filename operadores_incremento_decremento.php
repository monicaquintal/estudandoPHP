<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Operadores de incremento/decremento.</title>
  </head>

  <body>

  <h3>Pós-incremento</h3>

    <?php

    $a = 7;

    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a após o incremento (a++) ' . $a++ . ' <br>';
    echo "O atualizado é  $a <br>";

    ?>
    
    <h3>Pré-incremento</h3>

    <?php

    $a = 7;

    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a pré incremento (++a) ' . ++$a . ' <br>';
    echo "O atualizado é  $a <br>";

    ?>


    <h3>Pós-decremento</h3>

    <?php

    $a = 7;

    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a após o decremento (a--) ' . $a-- . ' <br>';
    echo "O atualizado é  $a <br>";

    ?>

    <h3>Pré-decremento</h3>

    <?php

    $a = 7;

    echo "O valor contido em a é $a <br>";
    echo 'O valor contido em a pré decremento (--a) ' . --$a . ' <br>';
    echo "O atualizado é  $a <br>";

    ?>



  </body>
</html>