<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Variáveis de Variáveis</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Variáveis de Variáveis
    </h2>

    <?php 
      // Variáveis de Variáveis

      // As variáveis de variáveis recebem o seu identificador do conteúdo da variável especificada na expressão de assinatura à esquerda do sinal = e recebe o conteúdo do lado direito do sinal =
      $site = "cursoemvideo";  
      $$site = "cursoPHP";

      echo "<p>$site</p>";
      echo "<p>$cursoemvideo</p>";
    ?>
  </div>

</body>

</html>