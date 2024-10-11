<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Contagens com While Loop</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Contagens com While Loop
    </h2>

    <?php 
      // Contagem Progressiva
      $c = 1;
      
      while ($c <= 10) {
        echo "<p>$c</p>";
        $c++;
      }
      
      // Contagem Regressiva
      $c = 10;
      
      while ($c >= 1) {
        echo "<p>$c</p>";
        $c--;
      }
      
      // Contagem Regressiva de dois em dois
      $c = 10;
      
      while ($c >= 0) {
        echo "<p>$c</p>";
        $c -= 2;
      }
      
    ?>
  </div>

</body>

</html>