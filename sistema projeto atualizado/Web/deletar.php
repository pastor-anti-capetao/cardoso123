<?php
    session_start();

    if (empty($_SESSION['usuario'])) {
        echo "<script>alert('Usuário não logado!')</script>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    }

    $pdo = new PDO("mysql:host=localhost;dbname=cardoso","root","");
/*     $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE id=?");
    $sql->execute(array($_GET['id']));
    $info = $sql->fetchAll(PDO::FETCH_ASSOC); */

    $sql = $pdo->prepare("DELETE FROM `usuarios` WHERE id=?");
    $sql->execute(array($_GET['id']));
    
    echo "<scrit>alert('Usuário excluído com sucesso!')</script>";
    $_SESSION['erro'] = "<div class='alert alert-success' role='alert'>Usuário excluído com sucesso!</div>";
    echo "<meta http-equiv= 'refresh' content='0; URL=listar.php'/>";

    
 

?>