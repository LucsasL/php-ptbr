<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Regiões com Base em Estados</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Regiões com Base em Estados
    </h2>

    <?php 
      $estado = $_REQUEST["estado"] ?? "Não especificado";
    ?>

    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get" autocapitalize="on">
      <label for="estado">Estado: </label> <br />
      <select name="estado" id="estadoInp">
        <!-- Sul -->
        <option value="1">Rio Grande do Sul</option>
        <option value="2">Santa Catarina</option>
        <option value="3">Parana</option>

        <!-- Sudeste -->
        <option value="4">São Paulo</option>
        <option value="5">Rio de Janeiro</option>
        <option value="6">Minas Gerais</option>
        <option value="7">Espiríto Santo</option>

        <!-- Centro Oeste -->
        <option value="8">Mato Grosso</option>
        <option value="9">Mato Grosso do Sul</option>
        <option value="10">Goiás</option>

        <!-- Norte -->
        <option value="11">Amazonas</option>
        <option value="12">Pará</option>
        <option value="13">Amapá</option>
        <option value="14">Acre</option>
        <option value="15">Rondônia</option>
        <option value="16">Tocantis</option>
        <option value="17">Roraima</option>

        <!-- Nordeste -->
        <option value="18">Maranhão</option>
        <option value="19">Ceará</option>
        <option value="20">Piaui</option>
        <option value="21">Bahia</option>
        <option value="22">Sergipe</option>
        <option value="23">Alagoas</option>
        <option value="24">Pernambuco</option>
        <option value="25">Rio Grande do Norte</option>
        <option value="26">Paraíba</option>
      </select>

      <input type="submit" value="Analisar" />
    </form>

    <?php 
      switch ($estado) {
        case 1:
        case 2:
        case 3:
          echo "<p>Região: SUL</p>";
          break;
          
        case 4:
        case 5:
        case 6:
        case 7:
          echo "<p>Região: SUDESTE</p>";
          break;
          
        case 8:
        case 9:
        case 10: 
          echo "<p>Região: CENTRO-OESTE</p>";
          break;
          
        case 11:
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
          echo "<p>Região: NORTE</p>";
          break;
          
        case 18:
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
        case 24:
        case 25:
        case 26:
          echo "<p>Região: NORDESTE</p>";
          break;
          
        default:
          echo "<p>Estado não especificado.</p>";
      }
    ?>
  </div>

</body>

</html>