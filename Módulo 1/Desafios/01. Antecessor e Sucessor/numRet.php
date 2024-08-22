<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e Sucessor | Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section>
    <h1>Resultado</h1>

    <?php 
      $num = $_GET["num"] ?? 0;

      echo "<p>O número digitado foi <strong>$num</strong></p>";
    ?>

    <?php 
      $antecessor = $num - 1;
      echo "<p>O seu <em>antecessor</em> é <strong>$antecessor</strong></p>";
    ?>

    <?php 
      $sucessor = $num + 1;
      echo "<p>O seu <em>sucessor</em> é <strong>$sucessor</strong></p>";
    ?>

    <button class="linkButt">
      <a href="javascript:history.go(-1)" target="_self" rel="prev">&#x2B05; Voltar</a>
    </button>
  </section>

</body>

</html>