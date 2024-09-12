<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Integração</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Integração
    </h2>

    <?php 
      $num1 = $_REQUEST["v1"] ?? 0;
      $num2 = $_REQUEST["v2"] ?? 0;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="v1">Valor 1: </label> <br />
      <input type="text" name="v1" id="v1ID" required /> <br />

      <label for="v2">Valor 2: </label> <br />
      <input type="text" name="v2" id="v2ID" required /> <br />

      <input type="submit" value="Enviar" />
    </form>

    <?php 
      echo "<p>A soma entre $num1 e $num2 é " . $num1 + $num2 . "</p>";
    ?>
  </div>

</body>

</html>