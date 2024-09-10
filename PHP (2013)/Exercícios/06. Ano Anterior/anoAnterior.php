<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Ano anterior</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Ano anterior
    </h2>

    <?php 
      $anoAtual = date("Y"); // Essa parte é um comentário

      echo "<h3>Estamos em $anoAtual.</h3>";
      echo "<h3>" . --$anoAtual . " foi o ano passado.</h3>";
    ?>
  </div>

</body>

</html>