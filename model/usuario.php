<?php

    class Usuario{
    private $conn;
    private $id;
    private $nome;
    private $numero;
    private $email;
    private $foto;
    private $tipo_perfil;
    private $senha;

    //private $tabela = 'pessoas';

    public function __construct($db){
        $this->conn = $db;
    }

    public function fromPOST($data, $id){
        if($id != null){
            $this->id = $id;
        }
        $this->nome = $data['nome'] ?? null;
        $this->numero = $data['numero'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->foto = $data['foto'] ?? null;
        $this->tipo_perfil = $data['perfil'] ?? null;
        $this->senha = $data['senha'] ?? null;

        if($this->tipo_perfil === 'usuario'){
            $this->tipo_perfil = 1;
        }
        else if($this->tipo_perfil === 'administrador'){
            $this->tipo_perfil = 2;
        }

    }

    public function criarString(){
        $sql = "INSERT INTO pessoas (foto, nome, numero, email, senha, tipo_perfil) VALUES (:foto, :nome, :numero, :email, :senha, :tipo_perfil)";
        return $sql;
    }

    public function lerString(){
        $sql = "SELECT * FROM pessoas WHERE id = :id";
        return $sql;
    }

    public function atualizarString(){
        $sql = "UPDATE pessoas SET foto = :foto, nome = :nome, numero = :numero, email = :email, senha = :senha, tipo_perfil = :tipo_perfil WHERE id = :id";
        return $sql;
    }

    public function deletarString(){
        $sql =  "DELETE FROM pessoas WHERE id = :id";
        return $sql;
    }

    public function   preencherQuery($stmt, $operacao){
        
        if($operacao === 'ler' || $operacao === 'deletar'){
            $stmt->bindParam(":id", $this->id);
            return $stmt;
        }

        if($operacao === 'atualizar'){
            $stmt->bindParam(":id", $this->id);
        }

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":tipo_perfil", $this->tipo_perfil);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":foto", $this->foto);
        
        return $stmt;
    }
}

?>