<?php

    include("../services/pedidos_service.php");

    session_start();

    $pedidoService = new PedidosService();

    $validar = $pedidoService->lerPedidos($_SESSION['id'], $_SESSION['dados']['tipo_perfil']);

    if($validar) {
        header('Location: ../views/meus_pedidos.php');
        exit;
    }
    else {
        header('Location: ../views/meus_pedidos.php');
        exit;
    }

?>