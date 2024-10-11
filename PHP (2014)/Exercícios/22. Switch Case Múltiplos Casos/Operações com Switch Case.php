<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operação com Swtich Case de Múltiplos Casos</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Operação com Swtich Case de Múltiplos Casos
    </h2>

    <?php 
      $dia = $_REQUEST["num"] ?? 2;
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="num">Dia da Semana: </label> <br />
      <input type="number" name="num" value="<?= $num ?>" id="v1ID" min="1" max="7" required /> <br />

      <input type="submit" value="Analisar" />
    </form>

    <?php 
      switch ($dia) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
          echo "<p>Levanta e vai estudar! :)</p>";
          break;
          
        case 1:
        case 7:
          echo "<p>Descanse pequeno Gafanhoto! ;)</p>";
          break;
          
        default:
          echo "<p>Dia da semana inválido</p>";
      }
    ?>
  </div>

</body>

</html>