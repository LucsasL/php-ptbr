<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Funções Internas do PHP (Parte 2)</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Funções Internas do PHP (Parte 2)
    </h2>

    <?php 
      // Função strtolower($string)

      // Transforma a letras de uma string em letra minúsculas
      echo "<h3>Função strtolower(\$string)</h3>";
      
      $nome = "Gustavo Guanabara";
      echo "Seu nome é " . strtolower($nome);
      
      // Função  strtoupper($string)

      // Converte as letras da string para maiúscula
      echo "<h3>Função strtoupper(\$string)</h3>";
      
      echo "Seu nome é " . strtoupper($nome);
      
      // Função ucfirst($string)

      // Mantém a primeira letra de uma string capitalizada
      echo "<h3>Função ucfirst()</h3>";
      
      $nome2 = ucfirst($nome);
      echo "Seu nome é $nome2";
      
      
      // Função ucwords($string)
      
      // A letra inicial de todas as palavras serão em letra maiúscula
      echo "<h3>Função ucwords(\$string)</h3>";
      
      $nome3 = ucwords($nome);
      echo "Seu nome é $nome3";
      
      // Função strrev($string)

      // Reverte uma string
      echo "<h3>Função strrev(\$string)</h3>";

      $nome4 = strrev($nome);
      echo "Seu nome ao contrário é $nome4";
      
      // Função strpos($string)

      // Busca a posição inicial de uma palavra e a retorna (um número inteiro)
      echo "<h3>Função strpos(\$string)</h3>";
      
      $frase = "Estou aprendendo PHP";
      $pos = strpos($frase, "PHP");
      echo "A string foi encontrada na posição $pos";
      
      // Função stripos($string)
      
      // A mesma coisa da função srtpos(), porém não considera se as letras são maiúsculas ou minúsculas
      echo "<h3>Função stripos(\$string)</h3>";
      
      $frase2 = "Estou aprendendo php";
      $pos2 = strpos($frase2, "PHP");
      echo "A string foi encontrada na posição $pos2";
      
      // Função substr_count($string)

      // Conta a quantidade de vezes em que uma sub-string especificada aparece em uma frase de uma string
      echo "<h3>Função substr_count(\$string)</h3>";
      
      $frase3 = "Estou aprendendo PHP no Curso em Vídeo de PHP";
      $cont = substr_count($frase3, "PHP");
      printf("A palavra \"PHP\" aparece $cont vezes na frase $frase3");
      
      // Função substr($string)

      // Puxa os caracteres de uma string baseando se nos índices passados como parâmetro, e depois os retorna como uma string única.

      // Caso apenas um valor numérico seja passado além da string, a função retornará uma string da posição especificada até o final da string
      echo "<h3>Função substr(\$string)</h3>";
      
      $site = "Curso em Vídeo";
      $sub = substr($site, 0, 5);
      // $sub = substr($site, 5);
      // $sub = substr($site, -5);
      // $sub = substr($site, -5, 2);
      echo "A palavra colocada da posição 0 até 5 na frase $site é  \"$sub\"";
      
      // Função str_pad($string)

      // Manipula a string a caber em um determinado número de caracteres, aplicando espaços entre as letras dependendo dos parâmetros
      echo "<h3>Função str_pad(\$string)</h3>";

      $nome5 = "Guanabara";
      $novo = str_pad($nome5, 30, " ", STR_PAD_RIGHT);
      echo "Meu professor $novo é bom!";
      
      // Função str_repeat($string)

      // Cria uma string que repete outra string um determinado número de vezes
      echo "<h3>Função str_repeat(\$string)</h3>";
      
      $txt = str_repeat("PHP", 5);
      echo $txt;

      // Função str_replace($string)

      // Troca algo na string com base nos parâmetros passados
      echo "<h3>Função str_repeat(\$string)</h3>";

      $frase3 = "Gosto de estudar Matemática!!!";
      echo "<p>Frase antiga: $frase3</p>";

      $novaFrase = str_replace("Matemática", "PHP", $frase3);
      echo "<p>Frase nova: $novaFrase</p>";
    ?>

  </div>

</body>

</html>