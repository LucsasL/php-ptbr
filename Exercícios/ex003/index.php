<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis e constantes em PHP</title>
</head>

<body>
  <h1>
    Variáveis e constantes em PHP
  </h1>

  <p>
    <?php 
      $nome = "Gustavo";
      $sobrenome = "Guanabara";
      const PAIS = "Brasil";
      // 
      // 
      // 
      // 
      // 
      $nome = "Rafael";
      $sobrenome = "Silva";
      // 
      // 
      // 
      // 
      // 

      echo "Muito prazer, $nome $sobrenome! Você mora no país " . PAIS;
    ?>
  </p>

  <?php 
  
  // regras pra nomes de identificadores

  // 1. Variáveis sempre começam com o simbolo $

  // 2. O segundo pode ser letra ou o símbolo _
  
  // 3. Aceita caracteres [a-z], [A-Z], [0-9] e [_]
  
  // 4. Aceita caracteres da tabela ASCII a partir de 128
  
  // 5. Aceita caracteres acentuados com á, õ, ç
  
  // 6. A linguagem é case sensitive em relação aos nomes
  
  // 7. Nomes especiais como $this não podem ser usados
  
  // Exemplo 1
  $nome = "Pedro";

  echo "É verdade que seu nome é $nome?";

  // Exemplo 2
  $salario = 2500.75;
  echo "Seu salário é de $salario";

  // Exemplo 3
  $valorv = 200;

  echo "O valor é igual a $valorv no programa";

  // Exemplo 4
  const _TX = 850;
  
  echo "Resultado" . _TX;

  // Recomendações para nomeações de variáveis

  // 1. Tente dar nomes claros e de fácil identificação

  // 2. Evite nomes muito curtos ou muito longos
  
  // 3. Defina um padrão e siga em todo o projeto

  // 4. Para variáveis, dê preferência a letras minúsculas
  
  // 5. Para constantes, dê preferência a letras maiúsculas

  // 6. Use camelCase para métodos e atributos

  // 7. Use SNAKE_CASE para nomear constantes

  $nomeCompletoCliente = "Camel Case";
  $telefone_contato_fornecedor = "Snake Case";
  $nomecursosuperior = "Lower Case";
  ?>
</body>

</html>