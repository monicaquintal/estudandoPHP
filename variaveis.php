<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Variáveis</title>
  </head>

  <body>
    <?php
      
    // string
    $nome = "Mônica :)";

    // int
    $idade = 30;


    // float
    $altura = 1.59;

    //boolean
    $fumante = false; // true = 1 e false = vazio (nada é retornado) -> permite tomadas de decisões

    // ... lógica ... //
    $idade = 31;

    ?>
    
  <h1>Ficha cadastral</h1>
  <p>Nome: <?= $nome ?></p>
  <p>Idade: <?= $idade ?></p>
  <p>Altura: <?= $altura ?></p>
  <p>Fumante? <?= $fumante ?></p>

  </body>
</html>