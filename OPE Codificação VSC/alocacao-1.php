<?php

require 'config.php';

include 'src/Alocacao.php';
$alocacao = new Alocacao($mysql);
$alocacaos = $alocacao->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Security</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style-home.css">
</head>

<body>
    <!--menu dropdown-->
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="/blog/pentests-1.php">Agendamentos</a></li>
            <li><a href="/blog/equipe-1.php">Nossos serviços</a></li>
            <li><a href="/blog/certificacao-1.php">Sobre nós</a></li>
            <li><a href="/blog/alocacao-1.php">Contato</a></li>
            <li><a href="/blog/index.php">Maria Layla</a>
                <ul>
                    <li><a href="/blog/serviços/index.php">Serviços</a></li>
                    <li><a href="/blog/gestaorisco/index.php">Gestão de risco</a></li>
                    <li><a href="/blog/acaoti/index.php">Ação TI</a></li>
                    <li><a href="/blog/lgpd-1.php">LGPD</a></li>
                    <li><a href="/blog/turnover/index.php">Turnover</a></li>
                    <li><a href="/blog/vagas/index.php">Vagas</a></li>
                </ul></li>

            <li><a href="/blog/index.php">Admin</a>
                <ul>
                    <li><a href="/blog/admin/pentest/index.php">Agendamentos</a></li>
                    <li><a href="/blog/admin/equipe/index.php">Nossos serviços</a></li>
                    <li><a href="/blog/admin/certificacao/index.php">Sobre nós</a></li>
                    <li><a href="/blog/admin/alocacao/index.php">Contatos</a></li>
                    <li><a href="/blog/admin/destaques/servicos/index.php">Maria Layla</a></li>
                    <!-- <li><a href="/blog/admin/destaques/gestaorisco/index.php">Gestão de risco</a></li>
                    <li><a href="/blog/admin/destaques/acaoti/index.php">Ação TI</a></li>
                    <li><a href="/blog/admin/destaques/lgpd/index.php">LGPD</a></li>
                    <li><a href="/blog/admin/destaques/turnover/index.php">Turnover</a></li>
                    <li><a href="/blog/admin/destaques/vagas/index.php">Vagas</a></li> -->
                </ul>
            </li>
        </ul>
    </nav>

    <img id="banner" src="logoSec.png">	

    <div id="container">
        <h1>Alocações</h1>
        <?php foreach ($alocacaos as $alocacao) : ?>
        <h2>
            <a href="equipe.php?id=<?php echo $alocacao['id']; ?>">
                <?php echo $alocacao['nome']; ?>
            </a>
        </h2>
        <p><b>Cliente: </b>
            <?php echo $alocacao['cliente']; ?>
        </p>
        <p><b>Projeto: </b>
            <?php echo $alocacao['projeto']; ?>
        </p>
        <?php endforeach; ?>
    </div>

    <footer>
        <img src="inlogo.png">
        <p class="copyright">&copy; Copyright insec - 2021</p>
    </footer>
    
</body>

</html>