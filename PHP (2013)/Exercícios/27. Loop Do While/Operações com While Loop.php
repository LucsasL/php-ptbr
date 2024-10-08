<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Do While Loop</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Do While Loop
    </h2>


    <?php 
      // Contagem Progressiva
      $count = 1;
      
      do {
        echo "$count ";
        $count++;
      } while ($count <= 10);
      
      // Contagem Regressiva
      do {
        echo "$count ";
        $count -= 2;
      } while ($count > 0);
    ?>
  </div>

</body>

</html>