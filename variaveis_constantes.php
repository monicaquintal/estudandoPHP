<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Variáveis Constantes</title>
  </head>

  <body>
    <?php

    // para criação de variáveis constantes, utilizar a função define(), que tem dois parâmetros: nome da variável (em formato de string) e valor
    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');

    echo BD_URL . '<br>';
    echo BD_USUARIO . '<br>';
    echo BD_SENHA;
    ?>
   
  </body>
</html>