<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Obrigatoriedade Eleitoral</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Obrigatoriedade Eleitoral
    </h2>

    <?php 
      $idade = $_REQUEST["idade"] ?? 18;
      $anoNasc = date("Y") - $idade;
      $obrigatoriedade = $idade >= 18 && $idade < 65 ? "é obrigado a votar" : ($idade < 16 ? "não pode votar" : "não é obrigado a votar");

      echo "<p>Nascido em $anoNasc.</p>";
      echo "<p>O eleitor com $idade anos $obrigatoriedade.</p>";
    ?>
  </div>

</body>

</html>