<?php

include("../config/database.php");
include("../model/usuario.php");
include("../model/pedido.php");

class PedidosService{
    private $db;

    public function __construct(){
        $database = new Database();
        $this->db = $database -> conectar();
    }

    public function fazerPedidos($data, $id, $tipo_perfil){

        $pedido = new Pedido($this->db);

        $pedido->fromPOST($data, $id, $tipo_perfil);

        $sql = $pedido->criarString();

        $fazerPedidoStmt = $this->db->prepare($sql);

        $fazerPedidoStmt = $pedido->preencherQuery($fazerPedidoStmt, 'fazerPedido', null);

        if($fazerPedidoStmt->execute()){
            return true;
        }
        else{
            return false;
        }


    }

    public function lerPedidos($id, $perfil_id) {
        
        $pedido = new Pedido($this->db);

        $pedido->fromPOST(null, $id, $perfil_id);

        $sql = $pedido->lerString($perfil_id);

        $lerPedidoStmt = $this->db->prepare($sql, );

        $lerPedidoStmt = $pedido->preencherQuery($lerPedidoStmt, 'ler', $perfil_id);

        if($lerPedidoStmt->execute()){
            $dadosPedidos = $lerPedidoStmt ->fetchAll(PDO::FETCH_ASSOC);
            if($dadosPedidos){
                $_SESSION['dadosPedidos'] = $dadosPedidos;
                return true; 
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}

?>