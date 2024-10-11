<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Funções Externas e Módulos</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div>
    <h1>
      Testando novas funções
    </h1>

    <?php 
      // Comando include

      // Puxa tags, variáveis e funções de outros arquivos PHP. Caso os arquivos não sejam importados corretamente, o programa continuará normalmente
      include "./funcoes.php";
      
      // Comando require
      
      // Puxa tags, variáveis e funções de outros arquivos PHP, porém só continua o programa caso o arquivo seja importado com sucesso
      require "./funcoes2.php";
      
      ola();
      mostrarValor(57);
      echo "<h2>Finalizando Programa...</h2>";
    ?>

  </div>

</body>

</html>