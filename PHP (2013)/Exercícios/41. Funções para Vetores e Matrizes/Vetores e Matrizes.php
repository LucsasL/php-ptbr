<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Vetores e Matrizes em PHP (Parte 2)</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Vetores e Matrizes em PHP (Parte 2)
    </h2>

    <pre>
      <?php
        // Funções para monitorar vetores e matrizes
        $v = ["A", "J", "M", "X", "K"];
        
        print_r($v);
        var_dump($v);

        echo "<p>O vetor tem " . count($v) . " elementos.</p>";

        
        // Funções para manipulação de vetores e matrizes

        // Função array_push($vetor, $valor)

        // Adiciona um valor no final do vetor
        echo "<h3>Função array_push(\$vetor, \$valor)</h3>";
        
        array_push($v, 7);
        var_dump($v);
        
        // Função array_pop($vetor)
        
        // Deleta o último valor de um vetor
        echo "<h3>Função array_pop(\$vetor)</h3>";
        
        array_pop($v);
        var_dump($v);
        
        // Função array_unshift($vetor, $valor)
        
        // Adiciona um valor ao início de um vetor
        echo "<h3>Função array_unshift(\$vetor, \$valor)</h3>";
        
        array_unshift($v, "bababoi");
        var_dump($v);
        
        // Função array_shift($vetor)
        
        // Deleta o valor do início de um vetor
        echo "<h3>Função array_shift(\$vetor)</h3>";

        array_shift($v);
        var_dump($v);
        
        // Função sort($vetor)
        
        // Ordena um vetor, tanto alfabetico, colocando em ordem alfabetica, quanto numérico, colocando em ordem crescente
        echo "<h3>Função sort(\$vetor)</h3>";
        
        sort($v);
        var_dump($v);
        
        // Função rsort($vetor)
        
        // Ordena inversamente um vetor, tanto alfabetico, colocando em ordem alfabetica inversa, quanto numérico, colocando em ordem decrescente
        echo "<h3>Função rsort(\$vetor)</h3>";
        
        rsort($v);
        var_dump($v);
        
        // Função asort($vetor)
        
        // Ordena um vetor como o sort(), mas dessa vez alterando as posições dos índices
        echo "<h3>Função asort(\$vetor)</h3>";
        
        asort($v);
        var_dump($v);
        
        // Função arsort($vetor)
        
        // Ordena inversamente um vetor como o rsort(), mas dessa vez alterando as posições dos índices
        echo "<h3>Função arsort(\$vetor)</h3>";
        
        arsort($v);
        var_dump($v);
        
        // Função ksort($vetor)
        
        // Ordena as chaves de um vetor
        echo "<h3>Função ksort(\$vetor)</h3>";
        
        ksort($v);
        var_dump($v);
        
        // Função krsort($vetor)
        
        // Ordena as chaves de um vetor inversamente
        echo "<h3>Função krsort(\$vetor)</h3>";
        
        krsort($v);
        var_dump($v);
        ?>
    </pre>

  </div>

</body>

</html>