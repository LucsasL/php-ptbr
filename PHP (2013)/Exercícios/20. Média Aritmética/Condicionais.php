<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Média Aritmética de Notas</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Média Aritmética de Notas
    </h2>

    <?php 
      $n1 = $_REQUEST["v1"] ?? 0;
      $n2 = $_REQUEST["v2"] ?? 0;
      $media = ($n1 + $n2) / 2;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="v1">Nota 1: </label> <br />
      <input type="text" name="v1" value="<?= $n1 ?>" id="v1ID" required /> <br />

      <label for="v2">Nota 2: </label> <br />
      <input type="text" name="v2" value="<?= $n2 ?>" id="v2ID" required /> <br />

      <input type="submit" value="Calcular Média" />
    </form>

    <?php 
      echo "<p>A média aritmética entre " . number_format($n1, 1, ",", ".") . " e " . number_format($n2, 1, ",", ".") . " é " . number_format($media, 1, ",", ".") . "</p>";
  
      if ($media >= 7) {
        echo "<p>Resultado: <strong style='color: green;'>APROVADO</strong></p>";
      } else if ($media <= 5) {
        echo "<p>Resultado: <strong style='color: red;'>REPROVADO</strong></p>";
      } else {
        echo "<p>Resultado: <strong style='color: orange;'>EM RECUPERAÇÃO</strong></p>";
      }
    ?>
  </div>

</body>

</html>