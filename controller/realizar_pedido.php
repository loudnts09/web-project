<?php

    include("../services/pedidos_service.php");

    session_start();

    $pedidoService = new PedidosService();

    $validar = $pedidoService -> fazerPedidos($_POST, $_SESSION['id'], $_SESSION['dados']['tipo_perfil']);

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