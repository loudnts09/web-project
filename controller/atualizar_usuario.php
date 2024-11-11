<?php 

include("../services/usuario_service.php");

session_start();

$usuarioService = new UsuarioService();

$validar = $usuarioService->atualizar($_POST, $_SESSION["id"]);

if($validar){
    $_SESSION['atualizado'] = 'SIM';
    header("Location: ler_usuario.php?cadastro=atualizado"); 
    exit;
}
else{
    $_SESSION['cadastrado'] = 'NAO';
    header("Location: ../views/ler_usuario.php?cadastro=naoatualizado"); 
    exit;
}

?>