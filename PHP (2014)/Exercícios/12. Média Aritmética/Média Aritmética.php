<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Média Aritmética</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Média Aritmética
    </h2>

    <?php 
      $nota1 = $_REQUEST["n1"] ?? 5;
      $nota2 = $_REQUEST["n2"] ?? 5;
      $m = ($nota1 + $nota2) / 2;
      $res = $m >= 6 ? "APROVADO" : "REPROVADO";

      echo "<p>A média aritmética de um aluno que tirou $nota1 e $nota2 é $m.</p>";
      echo "<p>O aluno está $res.</p>";
    ?>
  </div>

</body>

</html>