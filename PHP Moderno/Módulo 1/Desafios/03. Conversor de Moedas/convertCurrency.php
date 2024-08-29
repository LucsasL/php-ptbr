<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de Moedas | Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="ui">
    <main>
      <h1>
        Conversor de moedas v1.0
      </h1>

      <?php 
        $dinReal = $_GET["dinheiro"] ?? 0;
        $dinDolar = $dinReal / 5.47;
        // echo "<p>Seus R$" . number_format($dinReal, 2, ",", ".") . " equivalem a <strong>US$" . number_format($dinDolar, 2, ",", ".") . "</strong></p>";

        // Formatação de moedas com internacionalização

        // Internacionalizaçãp usando a biblioteca intl (Internalization)
        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        echo "<p>Seus " . numfmt_format_currency($padrao,$dinReal, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dinDolar, "USD") . "</strong></p>";
      ?>

      <p>
        <strong>Cotação fixa de R$5,47</strong> informada diretamente no código.
      </p>

      <button class="linkButt">
        <a href="javascript:history.go(-1)" target="_self" rel="prev">Voltar</a>
      </button>
    </main>
  </div>
</body>

</html>