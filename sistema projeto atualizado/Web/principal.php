<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class= bg-black  >
    <!-- CABEÇALHO DO SITE -->
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/logo.png" alt="" width="50px"></a>
            <a class="btn btn-dark" href="logout.php">Sair</a>
        </div>
    </nav>

    <div class="container text-center">
        <h2><font color="#ffffff">Menu de opções</font></h2>
        <a class="btn btn-lg btn-success" href="listar.php">Listar Usuários</a>
    </div>

    <div class="container text-center">
        <h2><font color="#ffffff">soluções</font></h2>
        <a class="btn btn-lg btn-success" href="solucoes.php">clique aqui</a>
    </div>

    <!-- RODAPÉ DO SITE -->
    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Todos os direitos reservados. 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>