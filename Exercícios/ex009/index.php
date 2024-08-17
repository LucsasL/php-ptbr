<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos em PHP</title>
</head>

<body>
  <?php
    // No PHP, o "mais" (+) é sempre considerado adição, portanto o retorno de uma operação utilizando o sinal sempre será um número

    // O operador que realiza a função de unir string é o ponto (.)

    // Vale salientar que apenas strings contento números serão convertidas em números, apenas em versões mais antigas do PHP, bastaria haver um número no inicio da string para realizar a adição, não importando o conteúdo total da string
    $desconhecido = "2" + "2";
    echo $desconhecido;

    // Operadores Aritméticos

    // Adição: +
    $adicao = 5 + 2;
    var_dump($adicao); // 7
    
    // Subtração: -
    $subtracao = 5 - 2;
    var_dump($subtracao); // 3
    
    // Multiplicação: *
    $multiplicacao = 5 * 2;
    var_dump($multiplicacao); // 10
    
    // Divisão Real: /
    $divisao = 5 / 2;
    var_dump($divisao); // 2.5
    
    // Módulo/Resto da divisão: %
    $modulo = 5 % 2;
    var_dump($modulo); // 1
    
    // Exponenciação: **
    $exponenciacao = 5 ** 2;
    var_dump($exponenciacao); // 25
  ?>
</body>

</html>