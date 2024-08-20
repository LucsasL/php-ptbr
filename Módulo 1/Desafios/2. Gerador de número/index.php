<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerador de números</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="ui">
    <section>
      <h1>
        Gerador de Números
      </h1>

      <?php
        $min = 0;
        $max = 100;

        // rand($min, $max) == 1951 - Linear Congrential Generator
        $randNumAnt = rand($min, $max);

        // A partir do PHP 7.1, rand() passa a ser um apontamento para mt_rand()
        // mt_rand($min, $max) == 1997 - Mersenne Twister (4x mais rápido que o rand())
        $randNumAnt2 = mt_rand($min, $max);

        echo "<p>Gerando um número aleatório entre $min e $max...</p>";
        
        // Usando random_int($min, $max); Gera números aleatórios criptograficamente seguros
        // Porém, é a função mais lentas comparando com as outras 3
        $randNum = mt_rand($min, $max);
        echo "<p>O valor gerado foi <strong>$randNum</strong></p>";
      ?>

      <button class="linkButt">
        <a href="." target="_self">🔁 Gerar outro número</a>
      </button>
    </section>
  </div>
</body>

</html>