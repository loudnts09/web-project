<?php 

include("../services/usuario_service.php");

session_start();

$usuarioService = new UsuarioService();

$validar = $usuarioService->atualizar($_POST, $_SESSION["id"]);

if($validar){
    $_SESSION['atualizado'] = 'SIM';
    header("Location: ../views/perfil.php?cadastro=atualizado"); 
    exit;
}
else{
    $_SESSION['cadastrado'] = 'NAO';
    header("Location: ../views/perfil.php?cadastro=naoatualizado"); 
    exit;
}

?>