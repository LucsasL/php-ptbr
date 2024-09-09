<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Tipos de Variáveis no PHP</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
  <div>
    <h1>
      Tipos de Variáveis
    </h1>

    <?php 
      $n = 4;
      $nome = "Gustavo";
      
      // Usando concatenação
      echo "<h2>" . $nome . " tem " . $n . " anos.</h2>";

      // Usando processamento de string

      // É necessário o uso de aspas duplas para o reconhecimento de variáveis
      echo "<h2>$nome tem $n anos.</h2>";
    ?>
  </div>
</body>

</html>