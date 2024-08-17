<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
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
        $dinReal = $_GET["dinheiro"];
        $dinDolar = $dinReal / 5.47;
        echo "<p>Seus R$$dinReal equivalem a <strong>US\$$dinDolar</strong></p>";
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