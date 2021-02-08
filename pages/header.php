<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <script type="text/javascript" src="javascript/jquery.min.css"></script>
        <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
        <script type="text/javascript" src="javascript/script.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        
        <title>Classificados</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Classificados</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
                <li class="nav-item">
                <a class="nav-link" href="meus-anuncios.php">Meus Anúncios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="cadastre-se.php">Cadastre-se</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
                <?php endif; ?>
            </ul>
            </div>
        </div>
    </nav>