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

      function soma($num1, $num2) {
        echo "<p>A soma de $num1 e $num2 é " . $num1 + $num2 . "</p>";
      }

      soma(5, 2);
      soma(7, 4);
      soma(15, 84);
      
      $x = 9;
      $y = 18;
      soma($x, $y);
    ?>

  </div>

</body>

</html>