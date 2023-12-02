<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
}

print_r($_POST);
$pdo = new PDO("mysql:host=localhost;dbname=cardoso","root","");
$sql = $pdo->prepare("UPDATE `usuarios` SET nome=?, endereco=?, numero=?, cidade=?, estado=?, rg=?, cpf=?, sexo=?, datanasc=?, email=?, senha=? WHERE id=?");
$sql->execute(array(
    $_POST['nome'],
    $_POST['end'],
    $_POST['num'],
    $_POST['cidade'],
    $_POST['estado'],
    $_POST['rg'],
    $_POST['cpf'],
    $_POST['sexo'],
    $_POST['datanasc'],
    $_POST['email'],
    $_POST['senha'],
    $_POST['id']));

$_SESSION['erro'] = "<div class='alert alert-success' role='alert'>Alterações realizadas com sucesso!</div>";
echo "<meta http-equiv= 'refresh' content='0; URL=listar.php'/>";

?>