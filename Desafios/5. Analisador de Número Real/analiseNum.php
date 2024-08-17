<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisador de Número Real | Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="ui">
    <main>
      <h1>
        Analisador de Número Real
      </h1>

      <?php 
        $numReal = $_GET["numReal"];
        $numInt = round($numReal);
        $numDec = $numReal - $numInt;
        
        echo "<p>Analisando o número <strong>$numReal</strong> informado pelo usuário:</p>";
      ?>

      <ul>
        <?php
          echo "<li>A parte inteira do número é <strong>$numInt</strong></li>";
        ?>

        <?php 
          echo "<li>A parte fracionária do número é <strong>$numDec</strong></li>";
        ?>
      </ul>
    </main>
  </div>
</body>

</html>