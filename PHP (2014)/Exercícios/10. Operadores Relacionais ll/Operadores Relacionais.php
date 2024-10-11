<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operadores Relacionais</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Operadores Relacionais
    </h2>

    <?php 
      $n1 = $_REQUEST["a"] ?? 0;
      $n2 = $_REQUEST["b"] ?? 0;
      $tipo = $_REQUEST["op"] ?? 0;

      echo "<p>Os valores passados foram $n1 e $n2.</p>";

      $r = $tipo == "s" ? $n1 + $n2 : $n1 * $n2;

      echo "<p>O resultado é $r.</p>";
    ?>
  </div>

</body>

</html>