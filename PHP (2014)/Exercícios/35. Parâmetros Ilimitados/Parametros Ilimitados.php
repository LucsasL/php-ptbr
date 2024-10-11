<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Parâmetros Ilimitados</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Parâmetros Ilimitados
    </h2>

    <?php 
      function soma() {
        $num = func_get_args();
        $numLen = func_num_args();
        $soma = 0;

        for ($c = 0; $c < $numLen; $c++) {
          $soma += $num[$c];
        }

        return $soma;
      }
      
      $res = soma(5, 6, 2, 8, 1, 9);
      
      echo "<p>A soma é " . $res . "</p>";
    ?>

  </div>

</body>

</html>