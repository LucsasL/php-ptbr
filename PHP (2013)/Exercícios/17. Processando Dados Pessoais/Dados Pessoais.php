<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Coletando Dados Pessoais</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Coletando Dados Pessoais
    </h2>

    <?php 
      // Forma antiga: isset($_GET["nome"] ? $_GET["nome"] : "[Não informado]")
      $nome = $_REQUEST["nome"] ?? "Desconhecido";
      $anoNasc = $_REQUEST["anoNasc"] ?? 0;
      $sexo = $_REQUEST["sexo"] ?? "Não Especificado";
      $data = date("Y");
      $idade = $data - $anoNasc;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="nome">Nome: </label> <br />
      <input type="text" name="nome" id="nomeID" value="<?= $nome ?>" required /> <br />

      <label for="anoNasc">Ano Nascimento: </label> <br />
      <input type="number" name="anoNasc" id="anoNascID" value="<?= $anoNasc ?>" min="1910" max="<?= $data ?>"
        required />
      <br />

      <fieldset>
        <legend>Sexo: </legend>

        <label for="sexo">Sexo: </label> <br />

        <input type="radio" name="sexo" id="masc" value="Masculino" checked />
        <label for="masc">Masculino</label> <br />

        <input type="radio" name="sexo" id="fem" value="Feminino" />
        <label for="fem">Feminino</label> <br />
      </fieldset>

      <input type="submit" value="Mostrar dados" />
    </form>

    <?php 
      echo "<p>O nome é $nome</p>";
      echo "<p>A Idade é $idade</p>";
      echo "<p>O sexo é $sexo</p>";
    ?>
  </div>

</body>

</html>