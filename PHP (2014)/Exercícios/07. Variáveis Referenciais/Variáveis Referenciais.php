<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Variáveis Referenciais</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Variáveis Referenciais
    </h2>

    <?php 
      // Variável $a criada
      $a = 3;
      
      // Variável referencial criada; $b == $a

      // As variáveis referenciais compartilham o mesmo lugar na memória do computador, portanto, qualquer atualização em qualquer variável referencial atualizará os dados da variável original
      $b = &$a;
      $b += 5;

      // $a == $b
      echo "<p>A variável A vale $a.</p>";      
      echo "<p>A variável B vale $b.</p>";
    ?>
  </div>

</body>

</html>