<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Atividade para fixação</title>
  </head>

  <body>

    <?php
    $idade = 90;
    $peso = 45;

    if ($peso >= 50 && ($idade >= 16 && $idade <= 69)) {
      echo 'Atende aos requisitos!';
    } else {
      echo 'Não atende aos requisitos...';
    }
    ?>

  </body>
</html>