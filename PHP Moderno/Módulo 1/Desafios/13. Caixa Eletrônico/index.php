<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Caixa Eletrônico</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <h1>
      Caixa Eletrônico
    </h1>

    <?php 
      $saque = $_REQUEST["valSaque"] ?? 0;

      // Cédulas de 100
      $ced100 = (int) ($saque / 100);
      $mod100 = $saque % 100;
      
      // Cédulas de 50
      $ced50 = (int) ($mod100 / 50);
      $mod50 = $mod100 % 50;
      
      // Cédulas de 10
      $ced10 = (int) ($mod50 / 10);
      $mod10 = $mod50 % 10;

      // Cédulas de 5
      $ced5 = (int) $mod10 / 5;
      
    ?>

    <div class="formDiv">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
        <fieldset>
          <legend>Saque Dinheiro</legend>

          <div>
            <label for="">Qual valor você deseja sacar? R1</label> <br />
            <input type="number" name="valSaque" id="valSaqueID" value="<?= $saque ?>"
              placeholder="Valor a ser sacado..." min="0" step="5" required />
          </div>
        </fieldset>

        <div>
          <input type="submit" value="Sacar" />
        </div>
      </form>
    </div>
  </main>

  <section>
    <?php 
      echo "<h2>Saque de ". 1 ." Realizado</h2>";
    ?>

    <p>
      O caixa eletrônico vai te entregar as seguintes notas:
    </p>

    <ul>
      <?php 
        echo "<li>x$ced100</li>";
        echo "<li>x$ced50</li>";
        echo "<li>x$ced10</li>";
        echo "<li>x$ced5</li>";
      ?>
    </ul>
  </section>
</body>

</html>