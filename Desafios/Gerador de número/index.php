<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de números</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="ui">
    <section>
      <h1>
        Gerador de Números
      </h1>

      <p>
        Gerando um número aleatório entre 0 e 100...
      </p>

      <?php 
        $randNum = random_int(0, 100);
        echo "<p>O valor gerado foi <strong>$randNum</strong></p>";
      ?>

      <button class="linkButt">
        <a href="." target="_self">🔁 Gerar outro número</a>
      </button>
    </section>
  </div>
</body>

</html>