<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reajustador de Preço</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <h1>
      Reajustador de Preço
    </h1>

    <div class="formDiv">
      <?php 
        // Padrão de formatação de moeda
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        // Variáveis de solicitação
        $precoProd = $_REQUEST["precoProd"] ?? 0;
        $percReaj = $_REQUEST["percReaj"] ?? 0;
        $aumentoCalc = $precoProd * ($percReaj / 100);
        $valProd = $precoProd + $aumentoCalc;
      ?>

      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
        <fieldset>
          <legend>
            Reajuste o preço
          </legend>

          <div>
            <label for="">Preço do Produto (R$)</label> <br />
            <input type="number" name="precoProd" id="precoProdID" value="<?= $precoProd ?>" min="0.1" step="0.01"
              placeholder="Preço do Produto" required />
          </div>

          <div>
            <label for="percReaj">Qual será o percentual de reajuste? <strong>(<span id="p">0</span>%
                )</strong></label>
            <br />
            <input type="range" name="percReaj" id="percReajID" value="<?= $percReaj ?>" min="0" max="100" step="1"
              oninput="mudaValor()" required />
          </div>
        </fieldset>

        <div>
          <input type="submit" value="Calcular Preço" />
        </div>
      </form>
    </div>
  </main>

  <section>
    <h2>
      Resultado de Reajuste
    </h2>

    <?php 
      echo "<p>O produto que custava " . numfmt_format_currency($padrao, $precoProd, "BRL") . ", com <strong>" . $percReaj . "% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $valProd, "BRL") . "</strong> a partir de agora.</p>";
    ?>
  </section>

  <script>
  mudaValor();

  function mudaValor() {
    p.innerText = percReajID.value;
  }
  </script>
</body>

</html>