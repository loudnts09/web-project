<?php 

    require "../config/database.php";
    require "usuario.php";
    
    session_start();

    $database = new Database();
    $db = $database->conectar();

    $usuario = new Usuario($db);

    if($usuario->deletarUsuario($_POST['id'])){
        $_SESSION['deletado'] = 'SIM';
        header("Location: ../views/perfil.php?deletado=feito"); 
        exit;
    }
    else{
        $_SESSION['cadastrado'] = 'NAO';
        header("Location: views/perfil.php?deletado=erro"); 
        exit;
    }

?>