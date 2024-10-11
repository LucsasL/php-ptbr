<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Funções com Retorno</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Funções com Retorno
    </h2>

    <?php 
      function soma($num1, $num2) {
        return $num1 + $num2;
      }
      
      $x = 5;
      $y = 7;
      $res = soma($x, $y);
      
      echo "<p>A soma de $x e $y é " . $res . "</p>";
    ?>

  </div>

</body>

</html>