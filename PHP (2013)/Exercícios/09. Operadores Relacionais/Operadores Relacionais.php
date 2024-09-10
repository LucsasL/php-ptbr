<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operadores Relacionais</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Operadores Relacionais
    </h2>

    <?php 
      // Operadores Relacionais
      $a = 5;
      $b = 7;

      // Sinal de maior >
      $a > $b; // False
      
      // Sinal de menor <
      $a < $b; // True
      
      // Sinal de maior ou igual a >=
      $a >= $b; // False
      
      // Sinal de menor ou igual a <=
      $a <= $b; // True
      
      // Sinal de igual ==
      $a == $b; // False
      
      // Sinal de idêntico ===
      $a === $b; // False
      
      // Sinal de diferente != || <>
      $a != $b; // True

      // Operador Unário expressão ? valor If true : valor If false
      $maior = $a > $b ? $a : $b;
    ?>
  </div>

</body>

</html>