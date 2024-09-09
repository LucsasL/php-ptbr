<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Funções Aritméticos em PHP</title>
</head>

<body>
  <h1>
    Funções Aritméticas em PHP
  </h1>

  <?php 
    $n1 = $_REQUEST["num1"] ?? 0;
    $n2 = $_REQUEST["num2"] ?? 1;
  ?>

  <div class="formulario">
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
      <div>
        <label for="num1">Número 1:</label> <br>
        <input type="number" name="num1" value="<?= $n1 ?>" id="num1ID" placeholder="Dividendo..." required />
      </div>

      <div>
        <label for="num2">Número 2:</label> <br>
        <input type="number" name="num2" value="<?= $n2 ?>" id="num2ID" placeholder="Divisor..." min="1" required />
      </div>

      <div>
        <input type="submit" value="Enviar" />
      </div>
    </form>
  </div>

  <?php
    // Função abs($num): Retorna o valor absoluto de um número, tornando o um número natural
    $numNat = abs(-5000);
    echo "<p>A resposta é $numNat\n</p>";

    // Função pow($base, $expoente): Retorna a potência de um número
    $numPot = pow(5, 2);
    echo "<p>5² == $numPot\n</p>";

    // Função sqrt(): Retorna a raiz quadrada
    $raizQdr9 = sqrt(81);
    echo "<p>A raiz quadrada de 81 é $raizQdr9</p>"; // 81 ** (1/2)

    // Função round($num): Arredonda o número aritméticamente
    echo "<p>5.78543 arredondado é " . round(5.78543) . "</p>";

    // Função number_format($num, $numDec, $virg, $pont)
    echo "<p>Tenho R$" . number_format(7000, 2, ",", ".") . " na minha carteira.</p>";
  ?>
</body>

</html>