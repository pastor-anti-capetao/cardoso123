<?php
    
    /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=cardoso','root','');

    /* PREPARAÇÃO PARA A GRAVAÇÃO */
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");
    
    /* ENVIA OS DADOS DE USUÁRIO E SENHA RECEBIDOS PELO POST*/
    $sql->execute(array($_POST['user'],$_POST['senha']));

    /* ORGANIZA OS RESULTADO DA PESQUISA DE FORMA ASSOCIATIVA */
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    //VERIFICA SE EXISTE UM USUÁRIO E SENHA VÁLIDO;
    if (empty($result)) {
        session_start();
        /* SE NÃO TIVER DADOS VÁLIDOS GUARDA UM ALERT DE ERRO NA SESSÃO */
        $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Usuário ou senha não encontrados!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    } else {
        session_start();
        /* INICIA A SESSÃO USUÁRIO E GUARDA O USUÁRIO ATIVO */
        $_SESSION['usuario'] = $_POST['user'];
        echo "<meta http-equiv= 'refresh' content='0; URL=principal.php'/>";
    }
?>