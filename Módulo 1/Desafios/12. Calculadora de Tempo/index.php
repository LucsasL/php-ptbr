<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculadora de Tempo</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <h1>
      Calculadora de Tempo
    </h1>

    <?php 
      $totSeg = $_REQUEST["totSeg"] ?? 0;
      // 1 Semana == 604.800 Segundos
      $sem = (int) ($totSeg / 604800);
      $modSem = $totSeg % 604800;
      
      // 1 Dia == 86.400 Segundos
      $dias = (int) ($modSem / 86400);
      $modDias = $modSem % 86400;
      
      // 1 Hora == 3.600
      $horas = (int) ($modDias / 3600);
      $modHoras = $modDias % 3600;
      
      // 1 Minuto == 60 Segundos
      $min = (int) ($modHoras / 60);
      $modMin = $modHoras % 60;
      
      $seg = (int) $modMin;
    ?>

    <div class="formDiv">
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" autocomplete="on">
        <fieldset>
          <legend>
            Calcule o tempo passado em segundos
          </legend>

          <div>
            <label for="totSeg">Qual é o total em segundos?</label> <br />
            <input type="number" name="totSeg" id="totSegID" value="<?= $totSeg ?>" step="1" min="0"
              placeholder="Tempo em Segundos" required />
          </div>
        </fieldset>

        <div>
          <input type="submit" value="Calcular" />
        </div>
      </form>
    </div>
  </main>

  <section>
    <h2>Totalizando Tudo</h2>

    <?php 
      echo "<p>Analisando o valor que você digitou, <strong>" . number_format($totSeg, 0, ",", ".") . " segundos</strong> equivalem a um total de:</p>";
    ?>

    <ul>
      <?php 
        echo "<li>$sem Semanas</li>";
        echo "<li>$dias Dias</li>";
        echo "<li>$horas Horas</li>";
        echo "<li>$min Minutos</li>";
        echo "<li>$seg Segundos</li>";
      ?>
    </ul>
  </section>
</body>

</html>