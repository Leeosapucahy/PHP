<?php

require 'config.php';
require 'src/Lgpd.php';


$obj_Lgpd = new Lgpd($mysql);
$lgpd = $obj_lgpd->encontrarPorId($_GET['id']);

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
            <?php echo $lgpd['item']; ?>
        </h1>
        <p>
            <?php echo $lgpd['indicecobertura']; ?>
        </p>
        <p>
            <?php echo $lgpd['peso']; ?>
        </p>
        <p>
            <?php echo $lgpd['total']; ?>
        </p>
        <p>
            <?php echo $lgpd['indicecompliance']; ?>
        </p>
        <p>
            <?php echo $lgpd['totalpeso']; ?>
        </p>
        <p>
            <?php echo $lgpd['totaltotal']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="lgpd-1.php">Voltar</a>
        </div>
    </div>
</body>

</html>