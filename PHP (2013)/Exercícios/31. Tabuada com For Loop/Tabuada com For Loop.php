<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Tabuada com For Loop</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Tabuada com For Loop
    </h2>

    <?php 
      $num = $_REQUEST["num"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="num">Número: </label>
      <input type="number" value="<?= $num ?>" name="num" id="numInp" required />

      <input type="submit" value="Enviar" />
    </form>

    <?php 
      for ($c = 1; $c <= 10; $c++) {
        $res = $num * $c;
        echo "<p>$num * $c = $res</p>";
      }
    ?>

  </div>

</body>

</html>