<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Médias de um Número</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>
      Médias Aritméticas
    </h1>

    <?php 
      // Média Aritmética
      $num1 = $_REQUEST["num1"] ?? 0;
      $num2 = $_REQUEST["num2"] ?? 0;
      $mediaAritSim = ($num1 + $num2) / 2;
      
      // Média Aritmética Ponderada
      $pes1 = $_REQUEST["pes1"] ?? 1;
      $pes2 = $_REQUEST["pes2"] ?? 1;
      $mediaAritPon = ($num1 * $pes1 + $num2 * $pes2) / ($pes1 + $pes2);
    ?>

    <div class="formDiv">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
        <fieldset>
          <legend>
            Média Aritmética Simples
          </legend>

          <div>
            <label for="num1">Valor 1: </label> <br />
            <input type="number" name="num1" id="num1ID" value="<?= $num1 ?>" placeholder="Número 1" required />
          </div>

          <div>
            <label for="pes1">Peso 1:</label>
            <input type="number" name="pes1" id="pes1ID" value="<?= $pes1 ?>" min="1" placeholder="Peso 1" required />
          </div>
        </fieldset>

        <fieldset>
          <legend>
            Média Aritmética Ponderada
          </legend>

          <div>
            <label for="num2">Valor 2: </label> <br />
            <input type="number" name="num2" id="num2ID" value="<?= $num2 ?>" placeholder="Número 2..." required />
          </div>

          <div>
            <label for="pes2">Peso 2:</label> <br />
            <input type="number" name="pes2" id="pes2ID" value="<?= $pes2 ?>" min="1" placeholder="Peso 2..."
              required />
          </div>
        </fieldset>

        <div>
          <input type="submit" value="Calcular Médias" />
        </div>
      </form>
    </div>
  </main>
  <section>
    <h2>
      Cálculo das Médias
    </h2>

    <?php 
      echo "Analisando os valores $num1 e $num2:"
    ?>

    <ul>
      <?php 
        echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mediaAritSim, 2, ",", ".") . "</li>";
        echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é igual a " . number_format($mediaAritPon, 2, ",", ".") . "</li>";
      ?>
    </ul>
  </section>
</body>

</html>