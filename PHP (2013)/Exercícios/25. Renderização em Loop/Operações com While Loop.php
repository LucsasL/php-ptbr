<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Renderização com While Loop</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Renderização com While Loop
    </h2>

    <?php 
      $num = $_REQUEST["num"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="num">Valores: </label>
      <input type="number" value="<?= $num ?>" name="num" id="numInp" min="0" max="100" required /> <br />

      <?php 
        $count = 1;
        
        while ($count <= $num) {
          echo "<label for='inp$count'>Valor " . $count + 1 . ": </label>";
          echo "<input type='number' name='inp$count' id='Inp' /> <br />";
          $count++;
        }
      ?>
      <input type="submit" value="Enviar" />
    </form>

    <?php 
      $count = 1;
      
      while ($count <= $num) {
        echo "<p>Valor $count: " . $_REQUEST["inp$count"];
        $count++;
      }
    ?>

  </div>

</body>

</html>