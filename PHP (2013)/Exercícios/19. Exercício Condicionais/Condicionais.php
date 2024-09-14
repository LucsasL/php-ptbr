<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Condicionais</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Condicionais
    </h2>

    <?php 
      $idade = $_REQUEST["idade"] ?? 0;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="idade">Idade: </label> <br />
      <input type="number" name="idade" max="120" value="<?= $idade ?>" id="idadeID" required /> <br />

      <input type="submit" value="Enviar" />
    </form>

    <?php 
      if ($idade < 16) {
        $vota = "não pode votar";
        $dirige = "não pode dirigir";
        
      } else if ($idade >= 18 && $idade < 65) {
        $vota = "deve votar";
        $dirige = "pode dirigir";
        
      } else {
        $vota = "pode votar";
        $dirige = "não pode dirigir";
        
        if ($idade > 64) {
          $dirige = "pode dirigir";
        }
      } 

      echo "<p>Uma pessoa com $idade anos de idade, $dirige.</p>";
      echo "<p>Uma pessoa com $idade anos de idade, $vota.</p>";
    ?>
  </div>

</body>

</html>