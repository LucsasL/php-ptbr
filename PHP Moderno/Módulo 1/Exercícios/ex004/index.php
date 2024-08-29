<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>
    Tipos Primitivos em PHP
  </h1>

  <?php 
    // Categorias de tipos primitivos

    // Escalares

      $sobrenome = "Silva"; // String

      // Sequência de letras, números e símbolos, sempre representadas entre aspas.

      $idade = 34; // Int/Integer

      // Um valor numérico inteiro, aquele que vem sem a parte decimal.

      $peso = 85.9; // Float/Double/Real

      // Um valor numérico Real, que vem com a parte decimal, depois do ponto flutuante.

      $casada = true; // Bool/Boolean

      // Um valor lógico ou Booleano, que aceita apenas os valores verdadeiro ou falso (true ou false).

    // Compostos

      $vet = [6, 2.5, "Maria", 3, false]; // Array
      var_dump($vet);

      // Array é uma estrutura de dados que comporta múltiplos valores em vários índices
      
      class Pessoa {
        private string $nome;
      }; // Object

      $p = new Pessoa;
      var_dump($p);

      // Objeto é uma estrutura de dados em que os índices podem ser descritos como strings

    // Especiais

      // Null

      // Resource

      // Callabe

      // Mixed
  ?>

  <?php
    // 0x == Hexadecimal
    // 0b == Binário
    // 0 == Octal
    
    // $num = 300;
    // echo "O valor da variável é $num";

    // $v = 500;
    // var_dump($v);

    $n = (int) 5e2; // Atribuindo um tipo a uma variável
    echo "O valor é $n ";
    var_dump($n);

    $casado = true;
    echo "O valor de casado é $casado";
  ?>
</body>

</html>