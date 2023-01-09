<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - IF/else - Operadores de comparação</title>
  </head>

  <body>
    <?php

    // ==
    // ===
    // != ou <>
    // !==
    // <
    // >
    // <=
    // >=

    if (1 !== "1") {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br>';

    if (6 >= 6)
      echo 'Exemplo de omissão das chaves';
      echo 'Funciona apenas para uma instrução!';
    echo 'Preferir sempre abrir e fechar as chaves';
    
    ?>
   
  </body>
</html>