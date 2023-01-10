<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - IF/else - Operadores Lógicos</title>
  </head>

  <body>
    <?php

    // operadores condicionais/comparação:
    // ==
    // ===
    // != ou <>
    // !==
    // <
    // >
    // <=
    // >=

    // operadoewa lógicos
    
    // E - &&
    // retorna V se todos os resultados das expressões forem V

    if(5 == 3 && 10 > 3) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br>';
    // OU - ||
    // retorna V se pelo menos um dos resultados das expressões for V

    if(5 == 5 || 10 < 3) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br>';
    // XOR - XOR 
    // retorna V se uma das expressões for V e a outra F, ou vice-versa.
    if(5 == 5 XOR 10 > 3) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br>';
    // negação - !
    // inverte o resultado retornado pela expressão
    if(!('a' == 'b')) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    //parênteses
    //    (V   E   V)  = V OU F -> resultado = V
    if ((22 == 22 && 3==3) || 5 != 5) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }
    ?>
   
  </body>
</html>