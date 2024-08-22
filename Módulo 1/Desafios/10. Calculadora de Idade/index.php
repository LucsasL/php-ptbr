<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculadora de Idade</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <h1>
      Calculando sua idade
    </h1>

    <?php 
      $anoNasc = $_REQUEST["anoNasc"] ?? 2000;
      $anoAtual = date("Y");
      
      $anoPref = $_REQUEST["anoPref"] ?? $anoAtual;
      $idade = $anoPref - $anoNasc;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
      <fieldset>
        <legend>Calculadora de Idade</legend>

        <div>
          <label for="anoNasc">Em que ano você nasceu?</label> <br />
          <input type="number" name="anoNasc" id="anoNascID" value="<?= $anoNasc ?>" placeholder="Ano de Nascimento..."
            required />
        </div>

        <div>
          <label for="anoPref">Quer saber sua idade em que ano? (Atualmentes estamos em
            <?= $anoAtual ?>)
          </label> <br />
          <input type="number" name="anoPref" id="anoPrefID" value="<?= $anoPref ?>"
            placeholder="Ano pra saber idade..." required />
        </div>
      </fieldset>

      <div>
        <input type="submit" value="Calcular Idade" />
      </div>
    </form>

    <?php 
    
    ?>
    <div class="formDiv">
    </div>
  </main>

  <section>
    <h2>
      Resultado
    </h2>

    <?php 
      echo "<p>Quem nasceu em $anoNasc tem <strong>$idade anos</strong> em $anoPref</p>";
    ?>
  </section>
</body>

</html>