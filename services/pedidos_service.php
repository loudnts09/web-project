<?php

include("../config/database.php");
include("../model/usuario.php");

class Pedidos_service{
    private $db;

    public function __construct(){
        $database = new Database();
        $this->db = $database -> conectar();
    }

    public function fazerPedidos($data, $id, $perfil_id){

        $pedido = new Pedido($this->db);

        $pedido->fromPOST($data, $id, $perfil_id);

        $sql = $pedido->criarString();

        $fazerPedidoStmt = $this->db->prepare($sql);

        $fazerPedidoStmt = $pedido->preencherQuery($sql);

        if($fazerPedidoStmt->execute){
            return true;
        }
        else{
            return false;
        }


    }
}

?>