<?php 

    include("../services/usuario_service.php");

    session_start();

    $usuarioService = new UsuarioService();

    $validar = $usuarioService->deletar(null, $_SESSION['id']);data: 

    if($validar){
        $_SESSION['cadastrado'] = 'NAO';
        header("Location: ../index?cadastro=ausente"); 
        exit;
    }
    else{
        $_SESSION['cadastrado'] = 'SIM';
        header("Location: ../views/cadastro.php?cadastro=presente"); 
        exit;
    }

?>