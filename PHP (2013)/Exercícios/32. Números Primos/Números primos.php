<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Números Primos</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Números Primos
    </h2>

    <?php 
      $num = $_REQUEST["num"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="num">Número: </label>
      <input type="number" value="<?= $num ?>" name="num" id="numInp" min="0" max="100" required />

      <input type="submit" value="Calcular" />
    </form>

    <?php 
      $res = "Não especificado";

      echo "<h3>Analisando o número $num...</h3>";
      echo "<p><strong>Valores múltiplos:</strong> $num</p>";
      echo "<p><strong>Total de múltiplos:</strong> $num</p>";

      for ($c = 1; $c <= $num; $c++) {
        if ($num % $c === 0 && $c != $num && $c != 1) {
          $res = "NÃO É PRIMO";
          echo "<p>Resultado: $num <strong style='color: red'>$res</strong></p>";
          break;
        }
        
        $res = "É PRIMO";
        echo "<p><strong>Resultado:</strong> $num <strong style='color: red'>$res</strong></p>";
        break;
      }
      
    ?>

  </div>

</body>

</html>