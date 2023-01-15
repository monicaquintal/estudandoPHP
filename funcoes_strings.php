<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP - Funções nativas para manipular strings</title>
  </head>

  <body>
    
  <?php

  $texto = "monica QUINTAL";
  echo $texto;
  echo "<br>";

  // string to lower:
  echo strtolower($texto);
  echo "<br>";

  // string to upper
  echo strtoupper($texto);
  echo "<br>";

  // uppercase first
  echo ucfirst($texto);
  echo "<br>";

  // string length - conta o n° de caracteres (incluindo espaços em branco)
  echo strlen($texto);
  echo "<br>";
  
  // string replace - substitui uma cadeia de caracteres. É case sensitive.
  echo str_replace("QUINTAL", "zungalo", $texto);
  echo "<br>";
  
  // substr (sub string)
  echo substr($texto, 0, 6);

  ?>
  </body>
</html>