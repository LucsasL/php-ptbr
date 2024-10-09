<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Contagens com o For Loop</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Contagens com o For Loop
    </h2>

    <?php 
      for ($c = 1; $c <= 10 ;$c++) {
        echo "$c ";
      }
      echo "<br />";
      
      for ($c = 24; $c > 1 ;$c--) {
        echo "$c ";
      }
      echo "<br />";
      
      for ($c = 1; $c <= 45 ;$c += 2) {
        echo "$c ";
      }
      echo "<br />";
    ?>

  </div>

</body>

</html>