<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        $numReal = $_POST["numReal"];
        
        $numInt = (int) $numReal;
        $numFrac = $numReal - $numInt;
        
        echo "<p>Analisando o número <strong>" . number_format($numReal, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
      ?>

      <ul>
        <?php
          echo "<li>A parte inteira do número é <strong>" . number_format($numInt, 0, ",", ".") . "</strong></li>";

          echo "<li>A parte fracionária do número é <strong>" . number_format($numFrac, 3, ",", ".") . "</strong></li>";
        ?>
      </ul>
    </main>
  </div>
</body>

</html>