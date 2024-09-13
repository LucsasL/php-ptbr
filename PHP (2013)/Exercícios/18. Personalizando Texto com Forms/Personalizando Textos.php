<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Personalização de Texto</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Personalização de Texto
    </h2>

    <?php 
      $texto = $_REQUEST["t"] ?? "Texto aqui";
      $color = $_REQUEST["cor"] ?? "black";
      $tam = $_REQUEST["tam"] ?? "11pt";
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="t">Texto:</label> <br />
      <input type="text" name="t" id="tID" required /> <br />

      <label for="tam">Tamanho:</label> <br />
      <select name="tam" id="itam">
        <option value="8pt">8</option>
        <option value="10pt">10</option>
        <option value="14pt">14</option>
        <option value="20pt">20</option>
        <option value="40pt">40</option>
      </select> <br />

      <label for="icor">Cor:</label>
      <input type="color" name="cor" id="icor" /> <br />
      <input type="submit" value="Gerar" />
    </form>

    <?php 
      echo "<p style='color: $color; font-size: $tam'>$texto</p>";
    ?>
  </div>

</body>

</html>