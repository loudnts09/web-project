<?php

    class Pedido{
        private $conn;
        private $pessoa_id;
        private $nome_da_pizza;
        private $tamanho;
        private $ingredientes;
        private $perfil_id;

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function fromPOST($data, $id, $perfil_id){
            if($data == null){
                $this->pessoa_id = $id;
            }
            else{
                $this->pessoa_id = $id;
                $this->nome_da_pizza = $data['nome_da_pizza'];
                $this->tamanho = $data['tamanho'];
                $this->ingredientes = $data['ingredientes'];
                $this->perfil_id = $perfil_id;
            }
        }

        public function criarString(){
            $sql = 'INSERT INTO pedidos (pessoa_id, nome_da_pizza, tamanho, ingredientes, perfil_id) VALUES (:pessoa_id, :nome_da_pizza, :tamanho, :ingredientes, :perfil_id)';
            return $sql;
        }

        public function lerString($perfil_id){
            if($perfil_id == 1){
                $sql = 'SELECT * FROM pedidos WHERE pessoa_id = :pessoa_id';
                return $sql;
            }
            else if($perfil_id == 2){
                $sql = 'SELECT * FROM pedidos';
                return $sql;
            }
        }

        public function preencherQuery($stmt, $operacao, $perfil_id){
            if($operacao == 'ler' && $perfil_id == 1){
                $stmt->bindParam(':pessoa_id', $this->pessoa_id);
                return $stmt;
            }
            if($operacao == 'ler'&& $perfil_id == 2){
                return $stmt;
            }
            $stmt->bindParam(':pessoa_id', $this->pessoa_id);
            $stmt->bindParam(':nome_da_pizza', $this->nome_da_pizza);
            $stmt->bindParam(':tamanho', $this->tamanho);
            $stmt->bindParam(':ingredientes', $this->ingredientes);
            $stmt->bindParam(':perfil_id', $this->perfil_id);

            return $stmt;
        }

    }


?>