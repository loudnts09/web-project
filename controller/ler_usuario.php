<?php
    ob_start();

    include("../services/usuario_service.php");

    session_start();

    $usuarioService = new UsuarioService();

    $validar = $usuarioService->ler($_POST, $_SESSION["id"]);

    if($_SESSION["atualizado"] == 'SIM'){
        header("Location: ../views/perfil.php?cadastro=atualizado"); 
        exit;
    }

    ob_end_clean();
?>