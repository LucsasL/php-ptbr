<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Raízes de um Número</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>
      Raízes de um Número
    </h1>

    <?php 
      $num = $_REQUEST["num"] ?? 0;
      $raizQ = sqrt($num);
      $raizC = $num ** (1/3);
    ?>

    <div class="formDiv">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
        <fieldset>
          <div>
            <label for="num">Número: </label> <br />
            <input type="number" name="num" id="numId" value="<?= $num ?>" min="0" required />
          </div>

          <div>
            <input type="submit" value="Calcular raízes" />
          </div>
        </fieldset>
      </form>
    </div>
  </main>

  <section>
    <h2>Resultado Final</h2>

    <?php 
      echo "<p>Analisando o <strong>número $num,</strong> temos:</p>";
    ?>

    <ul>
      <?php 
        echo "<li>A sua raiz quadrada é <strong>" . number_format($raizQ, 3, ",", ".") . "</strong></li>";
        echo "<li>A sua raiz cúbica é <strong>" . number_format($raizC, 3, ",", ".") . "</strong></li>";
      ?>
    </ul>
  </section>
</body>

</html>