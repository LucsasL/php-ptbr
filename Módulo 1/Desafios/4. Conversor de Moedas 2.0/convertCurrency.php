<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de Moedas 2.0 | Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="ui">
    <main>
      <h1>
        Conversor de moedas v2.0
      </h1>

      <!-- Usar API para fazer captura da cotação do dólar -->
      <?php 
        $dinReal = $_GET["dinheiro"];
        // $dinDolar = $;
        echo "<p>Seus R$$dinReal equivalem a <strong>US\$$dinDolar</strong></p>";
      ?>

      <p>
        *Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>
      </p>

      <button class="linkButt">
        <a href="javascript:history.go(-1)" target="_self" rel="prev">Voltar</a>
      </button>
    </main>
  </div>
</body>

</html>