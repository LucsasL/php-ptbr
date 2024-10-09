<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Tabuada</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Tabuada
    </h2>

    <?php 
      $num = $_REQUEST["num"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="num">Número: </label>
      <input type="number" value="<?= $num ?>" name="num" id="numInp" required /> <br />

      <input type="submit" value="Calcular" />
    </form>

    <table>
      <?php 
          $count = 1;

          do {
            $res = $num * $count;
            echo "<tr>$num * $count = $res</tr> <br />";
            $count++;

          } while ($count <= 10);
        ?>
    </table>

  </div>

</body>

</html>