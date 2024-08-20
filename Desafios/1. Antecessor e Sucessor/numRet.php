<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section>
    <h1>Resultado</h1>

    <?php 
      $num = $_GET["num"];

      echo "<p>O número digitado foi <strong>$num</strong></p>";
    ?>

    <?php 
      $antecessor = $num - 1;
      echo "<p>O seu antecessor é <strong>$antecessor</strong></p>";
    ?>

    <?php 
      $sucessor = $num + 1;
      echo "<p>O seu sucessor é <strong>$sucessor</strong></p>";
    ?>

    <button class="linkButt">
      <a href="javascript:history.go(-1)" target="_self" rel="prev">Voltar</a>
    </button>
  </section>

</body>

</html>