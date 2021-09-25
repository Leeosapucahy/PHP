<?php

require 'config.php';
require 'src/Equipe.php';


$obj_equipe = new Equipe($mysql);
$equipe = $obj_equipe->encontrarPorId($_GET['id']);

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
            <?php echo $equipe['colaborador']; ?>
        </h1>
        <p>
            <?php echo $equipe['cargo']; ?>
        </p>
        <p>
            <?php echo $equipe['alocacao']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="equipe-1.php">Voltar</a>
        </div>
    </div>
</body>

</html>