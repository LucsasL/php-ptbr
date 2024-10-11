<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Operadores Lógicos</title>
  <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>

  <div class="formulario">
    <h2>
      Operadores Lógicos
    </h2>

    <?php 
      // Operadores Lógicos

      // AND (&&)
      
      // Retorna veradeiro se todos os valores booleanos forem verdadeiro
      true && true === true;
      true && false === false;
      false && true === false;
      false && false === false;
      
      // OR (||)

      // Retorna veradeiro se um dos valores booleanos for verdadeiro
      true || true === true;
      true || false === true;
      false || true === true;
      false || false === false;

      // Exclusive OR (xor)

      // Retorna verdadeiro apenas se alguns booleans sejam verdadeiros

      true xor true === false;
      true xor false === true;
      false xor true === true;
      false xor false === false;
      
      // NOT (!)

      // Reverte o valor booleano
      !true === false;
      !false === true;
      
    ?>
  </div>

</body>

</html>