<?php 

    require "../config/database.php";
    require "usuario.php";
    
    session_start();

    $database = new Database();
    $db = $database->conectar();

    $usuario = new Usuario($db);

    if($usuario->atualizarUsuario($_POST['id'],$_POST['foto'], $_POST['nome'],$_POST['numero'], $_POST['email'], $_POST['senha'], $_POST['perfil'])){
        $_SESSION['atualizado'] = 'SIM';
        header("Location: ../views/perfil.php?atualizado=feito"); 
        exit;
    }
    else{
        $_SESSION['atualizado'] = 'NAO';
        header("Location: views/perfil.php?atualizado=erro"); 
        exit;
    }

?>