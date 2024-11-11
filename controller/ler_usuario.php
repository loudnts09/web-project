<?php

    include("../services/usuario_service.php");

    session_start();

    $usuarioService = new UsuarioService();

    $validar = $usuarioService->ler($_POST, $_SESSION["id"]);

    if($validar){
        header("Location: ../views/perfil.php"); 
        exit;
    }
    else{
        $_SESSION['lido'] = 'NAO';
        header("Location: ../views/cadastro.php"); 
        exit;
    }


?>