<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      Resultado do processamento
    </h1>
  </header>

  <main>
    <?php
      // var_dump($_GET); Usa o método GET
      // var_dump($_POST); Usa o método POST
      // var_dump($_REQUEST); $_GET + $_POST + $_COOKIES

      $nome = $_GET["nome"] ?? "Sem nome";
      $sNome = $_GET["sNome"] ?? "Desconhecido";
      echo "<p>Olá $nome $sNome, bem vindo ao meu site.</p>";
    ?>
    <a href="javascript:history.go(-1)" target="_self" rel="prev">Voltar para a página anterior</a>
  </main>
</body>

</html>