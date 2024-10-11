<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Funções Aritméticos em PHP</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Calculadora de Descontos
    </h2>

    <?php 
      $preco = $_REQUEST["num1"] ?? 0;
      $desc = $_REQUEST["num2"] ?? 1;
    ?>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
      <label for="num1">Preço:</label> <br>
      <input type="number" name="num1" value="<?= $preco ?>" id="num1ID" placeholder="Dividendo..." required /> <br>

      <label for="num2">Desconto:</label> <br>
      <input type="number" name="num2" value="<?= $desc ?>" id="num2ID" placeholder="Divisor..." min="1" max="99"
        required />
      <br>

      <input type="submit" value="Enviar" />
    </form>
    <?php
      $precoDesc = $preco - ($preco * ($desc / 100));
      echo "O preço de um produto de R$" . number_format($preco, 2, ",", ".") . " com $desc% de desconto é de R$" . number_format($precoDesc, 2, ",", ".");
    ?>
  </div>

</body>

</html>