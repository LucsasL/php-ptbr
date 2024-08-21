<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anatomia de uma Divisão</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <h1>Anatomia de uma Divisão</h1>

    <?php 
      $dividendo = $_REQUEST["dividendo"];
      $divisor = $_REQUEST["divisor"];
      $quociente = (int) ($dividendo / $divisor);
      $resto = $dividendo % $divisor;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
      <fieldset>
        <legend>
          Partes de uma divisão
        </legend>

        <div>
          <label for="dividendo">Dividendo: </label> <br />
          <input type="number" name="dividendo" id="dividendoInp" placeholder="Dividendo..." value="<?= $dividendo ?>"
            required />
        </div>

        <div>
          <label for="divisor">Divisor: </label> <br />
          <input type="text" name="divisor" id="divisorInp" placeholder="Divisor..." value="<?= $divisor ?>" required />
        </div>

        <div>
          <input type="submit" value="Analisar" />
        </div>
      </fieldset>
    </form>
  </main>

  <section>
    <h2>
      Estrutura da Divisão
    </h2>

    <div>
      <table class="divisao">
        <tbody>
          <tr>
            <?php 
              echo "<td>$dividendo</td>";
              echo "<td>$divisor</td>";
            ?>
          </tr>
          <tr>
            <?php 
              echo "<td>$resto</td>";
              echo "<td>$quociente</td>";
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>