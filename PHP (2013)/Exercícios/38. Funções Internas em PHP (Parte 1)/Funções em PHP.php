<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Funções para Manipulação de Strings em PHP</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Funções para Manipulação de Strings em PHP
    </h2>

    <?php 
      // Padrões
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      // Função printf()
      
      // Permite exibir uma string com itens formatados.
      
      echo "<h3>Função printf()</h3>";
      
      $prod = "leite";
      $preco = 4.5;

      printf("<p>O preço do %s é R$%.2f.</p>", $prod, $preco, 2);
    
      // Função print_r()
      
      // Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.

      // OBS: A função print_r($array) pode ser substituída por var_dump($array) ou var_export($array)
      echo "<h3>Função print_r()</h3>";

      $array1 = [4, 3, 8];
      print_r($array1);

      // Função wordwrap()

      // Cria quebras de linha ou divisões em uma string em um tamanho especificado.
      echo "<h3>Função wordwrap()</h3>";

      $txt = "Este é uma string de exemplo para utilizar a função wordwrap().";
      $res = wordwrap($txt, 8, "<br /> \n", false);
      echo $res;
      
      // Função strlen()

      // Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
      echo "<h3>Função strlen()</h3>";

      $txt2 = "Curso em Vídeo";
      $tamanho = strlen($txt2);
      echo $tamanho;
      
      // Função trim()

      // Elimina espaços em branco antes e depois de uma string.
      echo "<h3>Função trim()</h3>";
      
      $nome = "   José da Silva   ";
      trim($nome);
      echo $nome;
      
      // Função ltrim()
      
      // Elimina espaços no início de uma string.
      echo "<h3>Função rtrim()</h3>";
      
      $nome2 = "   Maria Peres Marte   ";
      ltrim($nome2);
      echo $nome2;
      
      // Função rtrim()
      
      // Elimina espaços em branco no final de uma string.
      echo "<h3>Função rtrim()</h3>";
      
      $nome3 = "   Josoares Naopel   ";
      rtrim($nome3);
      echo $nome3;
      
      // Função str_word_count()
      
      // Conta quantas palavras uma string possui.
      echo "<h3>Função str_word_count()</h3>";
      
      $frase = "Eu vou estudar PHP";
      $tamFrase = str_word_count($frase, 0);
      echo $tamFrase;
      
      // Função explode()
      
      // Quebra uma string e coloca os itens em um vetor.
      echo "<h3>Função explode()</h3>";
      
      $site = "Curso em Vídeo";
      $siteVet = explode(" ", $site);
      var_dump($siteVet);
      
      // Função str_split()
      
      // Coloca cada letra de uma string em uma posição de um vetor.
      echo "<h3>Função str_split()</h3>";

      $nome4 = "Cleide";
      $vetorNome = str_split($nome4);
      print_r($vetorNome);
      
      // Função implode()
      
      // Transforma um vetor inteiro em uma string.

      // OBS: A função implode(" ", $array) pode ser substituída por join($array)

      echo "<h3>Função implode()</h3>";
      
      $vetor = ["Curso", "em", "Vídeo"];
      $texto = implode("#", $vetor);
      echo $texto;
      
      // Função chr()
      
      // Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
      echo "<h3>Função chr()</h3>";

      $letra = chr(67);
      echo "A letra de código 67 é $letra";
      
      
      // Função ord()
      
      // Retorna o código ASCII de um caractere passado como parâmetro.
      echo "<h3>Função ord()</h3>";

      $codigoASCII = ord("A");
      echo "O código ASCII da letra A é $codigoASCII";
      
    ?>

  </div>

</body>

</html>