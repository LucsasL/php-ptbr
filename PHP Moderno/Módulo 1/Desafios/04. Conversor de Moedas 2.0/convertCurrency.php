<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de Moedas 2.0 | Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="ui">
    <main>
      <h1>
        Conversor de moedas v2.0
      </h1>

      <?php
        // Pegando a data do Sistema Operacional
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $atual = date("m-d-Y");

        // Puxando dados de uma API e tratando como JSON
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27$inicio%27&@dataFinalCotacao=%27$atual%27&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao";
        $dados = json_decode(file_get_contents($url), true);

        // Puxando input de usuário
        $dinReal = $_GET["dinheiro"] ?? 0;
        
        // Definindo um padrão de formatação de moeda
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
        $cotacaoDolar = $dados["value"][0]["cotacaoCompra"];
        $dinDolar = $dinReal / $cotacaoDolar;
        
        echo "<p>Seus " . numfmt_format_currency($padrao, $dinReal, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dinDolar, "BRL") . "</strong></p>";
      ?>

      <p>
        *Cotação obtida diretamente do site do
        <a href="https://bcb.gov.br" target="_blank" rel="noopener norefferer">
          Banco Central do Brasil
        </a>
      </p>

      <button class="linkButt">
        <a href="javascript:history.go(-1)" target="_self" rel="prev">Voltar</a>
      </button>
    </main>
  </div>
</body>

</html>