<?php

    include("../services/pedidos_service.php");

    session_start();

    $pedidoService = new Pedidos_service();

    if($_SESSION["tipo_perfil"] == 'administrador'){
        $perfil_id = 2;
    }
    else{
        $perfil_id = 1;
    }

    $validar = $pedidoService -> fazerPedidos($_POST, $_SESSION['id'], $perfil_id);

    if($validar){
        $_SESSION['pedido'] = 'feito';
    header("Location: ../views/fazer_pedido.php?pedido=realizado"); 
    exit;
    }
    else{
        $_SESSION['pedido'] = 'recusado';
    header("Location: ../views/fazer_pedido.php?pedido=naorealizado"); 
    exit;
    }




?>