<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operador Idêntico</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Operador Idêntico
    </h2>

    <?php 
      $a = 3;
      $b = "3";
      $res = $a == $b ? "Sim" : "Não";

      echo "<p>As variáveis A e B são iguais? $res</p>";
      
      $res2 = $a === $b ? "Sim" : "Não";
      echo "<p>As variáveis A e B são exatamente iguais em conteúdo e tipo? $res2</p>";
    ?>
  </div>

</body>

</html>