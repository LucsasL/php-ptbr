<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>As tags de PHP</title>
</head>

<body>
  <h1>As tags de PHP</h1>

  <!-- Super Tag PHP -->
  <?php 
    $name = "Irineu nusabi";
    echo "<p>Meu nome é $name</p>";
  ?>

  <!-- Short Open Tag -->
  <? ?>

  <!-- ASP Tag -->
  <!-- <% echo "A tag ASP deixou de funcionar no PHP 8" %> -->

  <!-- Short Tag PHP -->
  <?php echo "CursoemVídeo" ?>

  <!-- Preprocessamento do PHP -->

  <h2>
    Exemplo de PHP
  </h2>

  <p>
    <?php
      date_default_timezone_set("America/Sao_Paulo"); // GMT-3
      echo "Hoje é dia " . date("d/M/Y") . " ";
      echo "E a hora atual é " . date("G:i:s T");
    ?>
  </p>
</body>

</html>