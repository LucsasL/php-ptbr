<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Aritméticas</title>
</head>

<body>
  <h1>
    Funções Aritméticas
  </h1>

  <?php 
    // Função abs($num): Retorna o valor absoluto de um número, tornando o um número natural
    $numNat = abs(-5000);
    echo "A resposta é $numNat\n";

    // Função base_convert($num, $atualBase, $convertedBase): Converte a base de um número
    $numDec = 254;

    $baseOct = base_convert($numDec, 10, 8);
    $baseHex = base_convert($numDec, 10, 16);
    echo "O número $numDec na base decimal é representado como $baseOct em octal; em hexadecimal é $baseHex\n";

    // Função ceil($num): Arredonda o número para um inteiro crescente
    // Função floor($num): Arredonda o número para a base inteira
    // Função floor($num): Arredonda o número aritméticamente

    // Função hypot($cat1, $cat2): Calcula a hipotenusa de um triangulo retângulo

    // função intdiv($numDiv, $divisor): Divide um número e retorna a parte inteira
    
    $res = 5 / 2;
    $resInt = intdiv(5, 2);
    echo "$resInt\n";

    // Função min() e max(): Mostra o valor mínimo e máximo de uma sequência
    $minVal = min(5, 2, 7, 5, 1, 9, 3);
    $maxVal = max(5, 2, 7, 5, 1, 9, 3);
    echo "Valor Mínimo: $minVal e Valor máximo: $maxVal\n";

    // Função pi(): Retorna o pi
    $valPi = pi(); // Pode se usar tanto a função pi() como a constante M_PI
    $valPi2 = M_PI; // Pode se usar tanto a função pi() como a constante M_PI
    echo "Usando pi(): $valPi; e usando a constante M_PI: $valPi2\n";

    // Função pow($base, $expoente): Retorna a potência de um número
    $numPot = pow(5, 2);
    echo "5² == $numPot\n";

    // Função sin(), cos() e tan(): Retornam respectivamente seno, cosseno e tangente

    // Função sqrt(): Retorna a raiz quadrada
    $raizQdr9 = sqrt(81);
    echo $raizQdr9; // 81 ** (1/2)
  ?>
</body>

</html>