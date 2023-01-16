<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Funções para manipular datas</title>
  </head>

  <body>
    <?php

    // recuperação da data atual / data corrente
    echo "F (mês), " . "d (dia), " . "o (ano) e " . "D (dia)";
    echo "<br>"; 
    echo date('F d o D');

    echo "<hr>";

    echo "(dia)/" . "(mês)/" . "(ano)" . " " . " hora:" . "minutos";
    echo "<br>"; 
    echo date('d/m/Y H:i');
    echo "<hr>";
    
    // timezone default
    echo "timezone: ";
    echo date_default_timezone_get();
    echo "<br>"; 
    echo date('d/m/Y H:i');
    echo "<br>";

    // timezone set
    date_default_timezone_set('America/Sao_Paulo');
    echo "timezone set: ";
    echo date_default_timezone_get();
    echo "<br>"; 
    echo date('d/m/Y H:i');
    echo "<hr>";

    // padrão computacional: ano-mês-dia
    $data_inicial = '2023-01-01';
    $data_final = '2023-01-15';

    // descobrir quantos dias há entre a data inicial e a final

    //timestamp = 01/01/1970 (início da era Unix)
    
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    // calcula tempo entre data inicial e 01/01/1970
    // JS retorna milissegundos; php retorna segundos!!!

    echo $data_inicial . " - " . $time_inicial . " segundos." . "<br>";
    
    echo $data_final . " - " . $time_final . " segundos." . "<br>";

    $diferenca_times = abs($time_final - $time_inicial);

    // função abs: converte o resultado em seu respectivo valor absoluto (positivo), caso necessário
    
    echo "A diferença em segundos entre a data inicial e final é: " . $diferenca_times . "<br>";

    // 1 dia = 24 horas * 60 minutos * 60 segundos 
    // um dia possui 86400 segundos! 
    $diferenca_em_dias = $diferenca_times / 86400;

    echo "A diferença em segundos entre a data inicial e final é: " . $diferenca_em_dias;
    ?>
    
  </body>
</html>