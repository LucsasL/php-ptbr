<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introdução a Strings em PHP</title>
</head>

<body>
  <h1>
    Introdução a Strings em PHP
  </h1>

  <?php 
    // Tipos de String

    // Double Quoted

    // As Double Quoted (aspas duplas) no PHP permitem o uso de interpolação com variáveis, como as crases em JS; Em resumo, há uma interpretação do conteúdo processado.

    $exemplo = "Isso é um conteúdo de uma variável";

    "Isso é uma String Double Quoted, ela permite o uso de variáveis dentro, $exemplo";

    "PHP \u{1F418}";
    
    // Single Quoted
    
    // As Single Quoted (aspas simples/apostrofos) no PHP não permitem o uso de interpolação com variáveis

    'Isso é uma String Single Quoted, ela não permite interpolação com variáveis';

    // Concatenation Operator/Operador de Concatenação (.)
    
    // Une duas strings separadas e a retorna

    "Curso " . "PHP";

    const ESTADO = "RJ";
    echo "Moro no ESTADO\n"; // Moro no ESTADO
    echo "Moro no " . ESTADO . "\n"; // Moro no RJ

    $nome = "Rodrigo";
    $sNome = "Nogueira";

    echo "$nome \"Minotauro\" $sNome\n"; // Sequência de escape

    // Ecape Sequences

    // \n: Quebra de linha

    // \t: Tabulação Horizontal

    // \\: Barra invertida

    // \$: Mostrar Cifrão

    // \u{}: Codepoint Unicode

    // Heredoc

    // As Strings Heredoc permitem o uso de interpolação e preservam a formatação do texto como foi escrito

    $curso = "PHP";
    $ano = date('Y');
    echo <<< FRASE
      Estou cursando
        $curso em $ano \u{1F596}
    FRASE;

    // Nowdoc

    // Semelhante a Heredog, diferenciando-se na sintaxe, para utiliza-la, basta atribuir um nome com aspas simples no começo da string 
    
    $curso = "PHP";
    $ano = date('Y');
    echo <<< 'TESTE'
      Estou cursando
        $curso em $ano
      TESTE;
  ?>

  <?php 
    
  ?>

</body>

</html>