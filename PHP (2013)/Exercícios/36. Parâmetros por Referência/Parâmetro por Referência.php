<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Parâmetros por Referência</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Parâmetros por Referência
    </h2>

    <?php 
      // A função do & é passar o parâmetro por referência
      function soma(&$x) {
        $x += 5;
        echo "<p>A soma é $x</p>";
        return $x;
      }
      
      $num = 7;
      $res = soma($num);
      
      echo "<p>A soma é $res</p>";
    ?>

  </div>

</body>

</html>