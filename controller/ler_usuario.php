<?php
    ob_start();

    include("../services/usuario_service.php");

    session_start();

    $usuarioService = new UsuarioService();

    $validar = $usuarioService->ler($_POST, $_SESSION["id"]);

    ob_end_clean();
?>