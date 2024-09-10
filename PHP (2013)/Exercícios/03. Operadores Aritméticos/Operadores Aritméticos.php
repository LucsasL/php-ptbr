<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operadores Aritméticos</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h1>
      Operadores Aritméticos
    </h1>

    <?php 
      $n1 = $_REQUEST["num1"] ?? 0;
      $n2 = $_REQUEST["num2"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
      <label for="num1">Número 1:</label> <br>
      <input type="number" name="num1" value="<?= $n1 ?>" id="num1ID" placeholder="Dividendo..." required /> <br>

      <label for="num2">Número 2:</label> <br>
      <input type="number" name="num2" value="<?= $n2 ?>" id="num2ID" placeholder="Divisor..." min="1" required />
      <br>

      <input type="submit" value="Enviar" />
    </form>

    <?php
      // Soma +
      $soma = $n1 + $n2;
      echo "<p>A soma de $n1 e $n2 é igual a " . number_format($soma) . ".</p>";
      
      // Subtração -
      $subtracao = $n1 - $n2;
      echo "<p>A subtração de $n1 e $n2 é igual a " . number_format($subtracao) . ".</p>";
      
      // Multiplação *
      $multi = $n1 * $n2;
      echo "<p>A multiplicação de $n1 e $n2 é igual a " . number_format($subtracao) . ".</p>";
      
      // Divisão /
      $divisao = $n1 / $n2;
      echo "<p>A divisão de $n1 e $n2 é igual a " . number_format($divisao, 2, ",", ".") . ".</p>";
      
      // Módulo %
      $modulo = $n1 % $n2;
      echo "<p>O módulo de $n1 e $n2 é igual a " . number_format($modulo) . ".</p>";
      
      // Média Aritmética
      
      // Por conta da ordem de precedência, é necessário utilizar parenteses para obter a equação correta
      $media = ($n1 + $n2) / 2; 
      echo "<p>A média aritmética é igual a " . number_format($media, 2, ",", ".") . ".</p>";
    ?>
  </div>

</body>

</html>