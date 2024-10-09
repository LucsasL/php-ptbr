<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Calculando o fatorial usando Loops</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Calculando o fatorial usando Loops
    </h2>

    <?php 
      $num = $_REQUEST["num"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="num">Número: </label>
      <input type="number" value="<?= $num ?>" name="num" id="numInp" required /> <br />

      <input type="submit" value="Calcular" />
    </form>

    <?php 
      $c = $num > 1 ? $num - 1 : 1;
      $res = $num;
      
      do {
        $res *= $c;
        $c--;

      } while ($c > 1);

      echo "O fatorial de $num é $res";
    ?>

  </div>

</body>

</html>