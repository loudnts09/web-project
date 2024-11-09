<?php 

    require "../config/database.php";
    require "usuario.php";
    
    session_start();

    $database = new Database();
    $db = $database->conectar();

    $usuario = new Usuario($db);

    if($usuario->criarUsuario($_POST['foto'],$_POST['nome'], $_POST['numero'], $_POST['email'], $_POST['senha'], $_POST['perfil'])){
        $_SESSION['cadastrado'] = 'SIM';
        header("Location: ../views/cadastro.php?cadastro=feito"); 
        exit;
    }
    else{
        $_SESSION['cadastrado'] = 'NAO';
        header("Location: views/cadastro.php?cadastro=erro"); 
        exit;
    }

?>