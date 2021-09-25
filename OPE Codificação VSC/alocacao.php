<?php

require 'config.php';
require 'src/Alocacao.php';

$obj_alocacao
 = new Equipe($mysql);
$alocacao = $obj_alocacao->encontrarPorId($_GET['id']);

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
            <?php echo $alocacao['nome']; ?>
        </h1>
        <p>
            <?php echo $alocacao['cliente']; ?>
        </p>
        <p>
            <?php echo $alocacao['projeto']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="alocacao-1.php">Voltar</a>
        </div>
    </div>
</body>

</html>