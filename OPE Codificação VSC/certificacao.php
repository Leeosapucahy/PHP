<?php

require 'config.php';
require 'src/Certificacao.php';

$obj_certificacao
$certificacao = new Certificacao($mysql);
$certificacao = $obj_certificacao->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Security</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>
            <?php echo $certificacao['nome']; ?>
        </h1>
        <p>
            <?php echo $certificacao['cargo']; ?>
        </p>
        <p>
            <?php echo $certificacao['certificacao']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="certificacao-1.php">Voltar</a>
        </div>
    </div>
</body>

</html>