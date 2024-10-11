<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Vetores e Matrizes em PHP</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Vetores e Matrizes em PHP
    </h2>

    <pre>
      <?php
        // Declarando e assinando um vetor
        $n = [3, 5, 8, 2];
      
        // Outra forma de declarar e assinar vetores
        $n2 = array (3, 5, 8, 2);
      
        // Adicionando um índice novo ao vetor já assinado
        $n[4] = 7;
        // Adicionando um índice novo na última posição da variável já assinada
        $n[] = 15;

        var_dump($n);
        var_dump($n2);

        // Função range()

        // A função range() retornará um vetor com o primeiro índice contendo o valor do primeiro parâmetro (nesse caso 5), e o último contendo o valor do segundo parâmetro (nesse caso 20), e então, determinará as outras posições entre eles somando ao valor do primeiro índice com base no 3° parâmetro, nesse caso de somará 5 em 5
        $c = range(5, 20,2); // [5, 10, 15, 20]
        var_dump($c);

        // Função foreach()
        foreach($c as $v) {
          echo "$v ";
        }

        echo "<br />";
        
        $v = array (1=>"A", 3=>"B", 0=> "C", 2=>"D");
        
        var_dump($v);
        foreach($v as $i) {
          echo "$i ";
        }
        
        echo "<br />";
        
        // Vetores com índices em string
        $cad = ["nome" => "Ana", "idade" => 23, "peso" => 78.5];
        $cad["fuma"] = true;

        var_dump($cad);

        // Usadno foreach em vetores com índices de string
        foreach($cad as $campo => $valor) {
          echo "$campo => $valor, ";
        }

        // Matrizes
        echo "<h3>Matrizes</h3>";

        $n3 = [[2, 3], [3, 4], [9, 5]];
        var_dump($n3);

        $n3[0][1] = "BRUH";
        echo $n3[0][1];
      ?>
    </pre>

  </div>

</body>

</html>