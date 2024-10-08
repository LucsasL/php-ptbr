<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Contagem controlado com While Loop</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Contagem controlado com While Loop
    </h2>

    <?php 
      $ini = $_REQUEST["ini"] ?? 1;
      $fim = $_REQUEST["fim"] ?? 10;
      $passo = $_REQUEST["passo"] ?? 1;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
      <label for="ini">Início: </label>
      <input type="number" value="<?= $ini ?>" name="ini" id="numInp" required /> <br />

      <label for="fim">Fim: </label>
      <input type="number" value="<?= $fim ?>" name="fim" id="numInp" required /> <br />

      <label for="passo">Passo: </label>
      <input type="number" value="<?= $passo ?>" name="passo" id="numInp" required /> <br />

      <input type="submit" value="Enviar" />
    </form>

    <?php 
      if ($ini < $fim) {
        echo "Contagem Progressiva: ";
        
        while ($ini <= $fim) {
          echo "$ini ";
          $ini += $passo;
        }
        
      } else if ($ini > $fim) {
        echo "Contagem Regressiva: ";
        
        while ($ini >= $fim) {
          echo "$ini ";
          $ini -= $passo;
        }
        
      } else {
        echo "O início e o fim tem o mesmo valor";
      }
    ?>

  </div>

</body>

</html>