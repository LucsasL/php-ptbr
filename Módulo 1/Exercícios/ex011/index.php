<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulários retroalimentados no PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php 
    // Capturando os dados do formulário retroalimentado
    $valor1 = $_REQUEST["num1"] ?? 0;
    $valor2 = $_REQUEST["num2"] ?? 0;
  ?>

  <main>
    <h1>
      Somador de valores
    </h1>

    <div class="formDiv">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocapitalize="on">
        <fieldset>
          <legend>Adição de números</legend>

          <div>
            <label for="num1">Número 1: </label> <br />
            <input type="number" name="num1" id="num1Inp" value="<?= $valor1 ?>" required />
          </div>

          <div>
            <label for="num2">Número 2: </label> <br />
            <input type="number" name="num2" id="num2Inp" value="<?= $valor2 ?>" required />
          </div>

          <div>
            <input type="submit" value="Somar" />
          </div>
        </fieldset>
      </form>
    </div>
  </main>

  <section id="res">
    <?php 
      $res = $valor1 + $valor2;
      print "<h2>A soma de $valor1 e $valor2 é de <strong>$res</strong></h2>";
    ?>
  </section>
</body>

</html>