<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Raiz Quadrada de um número</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Raiz Quadrada de um número
    </h2>

    <?php 
      $num1 = $_REQUEST["v1"] ?? 0;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="v1">Valor 1: </label> <br />
      <input type="text" name="v1" id="v1ID" required /> <br />

      <input type="submit" value="Calcular" />
    </form>

    <?php 
      echo "<p>A raiz quadrada de $num1 é " . sqrt($num1) . "</p>";
    ?>
  </div>

</body>

</html>