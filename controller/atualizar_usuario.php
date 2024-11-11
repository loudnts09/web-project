<?php 

include("../services/usuario_service.php");

session_start();

$usuarioService = new UsuarioService();

$validar = $usuarioService->atualizar($_POST);

if($validar){
    $_SESSION['cadastrado'] = 'SIM';
    header("Location: ../views/cadastro.php?cadastro=feito"); 
    exit;
}
else{
    $_SESSION['cadastrado'] = 'NAO';
    header("Location: ../views/cadastro.php?cadastro=erro"); 
    exit;
}

?>