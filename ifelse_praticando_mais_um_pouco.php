<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - IF/else - Operadores Lógicos</title>
  </head>

  <body>

    <?php

    // e-commerce: frete gratuito se o usuário possuir o cartão da loja e se o valor da compra for maior que 100 reais.
    
    $usuario_possui_cartao_loja = true;
    $valor_compra = 99;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
      $valor_frete = 0;
      $recebeu_desconto_frete = true;
    }

    ?>

  <h1>Detalhes do pedido</h1>
  
  <p>Possui cartão da loja?

    <?php
      if ($usuario_possui_cartao_loja == true) {
        echo 'SIM';
      } else {
        echo 'NÃO';
      }
      ?>
  </p>

  <p>Valor da compra: <?= $valor_compra?></p>

  <p>Recebeu desconto no frete?

    <?php
      if ($recebeu_desconto_frete) {
        echo 'SIM';
      } else {
        echo 'NÃO';
      }
    ?>
  </p>

  <p>Valor do frete: <?= $valor_frete?></p>


  </body>
</html>