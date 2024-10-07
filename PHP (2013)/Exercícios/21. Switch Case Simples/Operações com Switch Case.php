<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operação com Swtich Case</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Operação com Swtich Case
    </h2>

    <?php 
      $num = $_REQUEST["num"] ?? 0;
      $op = $_REQUEST["op"] ?? "Dobro";
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="num">Número: </label> <br />
      <input type="number" name="num" value="<?= $num ?>" id="v1ID" step="0.01" required /> <br />

      <fieldset>
        <legend>Operação</legend>
        <input type="radio" name="op" value="Dobro" id="dobroInp" checked />
        <label for="dobroInp">Dobro</label> <br />

        <input type="radio" name="op" value="Ao cubo" id="cuboInp" />
        <label for="cuboInp">Ao cubo</label> <br />

        <input type="radio" name="op" value="Raiz Quadrada" id="raizQInp" />
        <label for="raizQInp">Raiz Quadrada</label> <br />
      </fieldset>

      <input type="submit" value="Calcular Média" />
    </form>

    <?php 
      switch ($op) {
        case "Dobro":
          $res = $num * 2;
          break;
          
        case "Ao cubo":
          $res = $num ** 3;
          break;
          
        case "Raiz Quadrada":
          $res = sqrt($num);
          break;
          
        default:
          echo "Error";
      }

      echo "O $op de $num é $res.";
    ?>
  </div>

</body>

</html>