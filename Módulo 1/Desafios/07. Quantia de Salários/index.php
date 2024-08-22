<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quantia de Salários</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php 
    // Informações básicas
    $sal = $_REQUEST["sal"] ?? 1412;
    $salMin = 1412;
    
    // Padrão de formatação de moeda
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    
    // Operações
    $quantSal = (int) ($sal / $salMin);
    $restoCalc = 1412 * ($sal / $salMin - $quantSal);
  ?>
  <main>
    <h1>
      Informe seu Salário
    </h1>

    <div class="formDiv">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
        <fieldset>
          <div>
            <label for="sal">Salário (R$): </label> <br />
            <input type="number" name="sal" id="salInp" value="<?= $sal ?>" placeholder="Seu salário..." required />
          </div>

          <?php 
            echo "<p>Considerando um salário mínimo de <strong>" . numfmt_format_currency($padrao, $salMin, "BRL") . ".</strong></p>";
          ?>
          <div>
            <input type="submit" value="Calcular" />
          </div>
        </fieldset>
      </form>
    </div>

  </main>

  <section>
    <h2>Resultado Final</h2>
    <?php 
     echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao, $sal, "BRL") . " ganha <strong>$quantSal salários mínimos + ". numfmt_format_currency($padrao, $restoCalc, "BRL") ."</strong></p>";
    ?>
  </section>
</body>

</html>