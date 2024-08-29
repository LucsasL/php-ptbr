<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super Globais em PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <pre>
      <?php
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

        session_start();
        $_SESSION["teste"] = "Funcionou!";

        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET);

        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST);

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);

        // Superglobal $_COOKIE: É um array de informações guardadas no seu navegador referentes a aplicação
        echo "<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);

        // Superglobal $_FILES: Guarda os uploads de arquivos realizados na aplicação 
        
        // Superglobal $_SESSION: Variáveis que não são perdidas entre a navegações de páginas
        echo "<h1>Superglobal SESSION</h1>";
        var_dump($_SESSION);          
        
        // Superglobal $_ENV (Environment): Variáveis de ambiente do servidor
        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);

        // foreach (getenv() as $c => $v) {
        //   echo "<br />$c -> $v";
        // }

        // Superglobal $_SERVER: 
        echo "<h1>Superglobal SERVER</h1>";
        var_dump($_SERVER);

        // Superglobal $GLOBALS: Mostra os dados de todas as outras superglobais
        echo "<h1>Superglobal GLOBALS</h1>";
        var_dump($GLOBALS);
      ?>
    </pre>
  </main>
</body>

</html>