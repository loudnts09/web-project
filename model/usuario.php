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

        private $tabela = 'pessoas';

        public function __construct($db){
            $this->conn = $db;
        }

        public function fromPOST($data){
            $this->id = $data['id'];
            $this->nome = $data['nome'];
            $this->numero = $data['numero'];
            $this->email = $data['email'];
            $this->foto = $data['foto'];
            $this->tipo_perfil = $data['perfil'];
            $this->senha = $data['senha'];

            if(empty($this->numero)){
                $this->numero = null;
            }

            if(empty($this->foto)){
                $this->foto = null;
            }

        }

        public function criarString(){
            $sql = "INSERT INTO ". $this->tabela . " (foto, nome, numero, email, senha, tipo_perfil) VALUES (:foto, :nome, :numero, :email, :senha, :tipo_perfil)";
            return $sql;
        }

        public function lerString(){
            $sql = "SELECT * FROM " . $this->tabela;
            return $sql;
        }

        public function atualizarString(){
            $sql = "UPDATE " . $this->tabela . " SET foto = :foto, nome = :nome, numero = :numero, email = :email, senha = :senha, tipo_perfil = :tipo_perfil";
            return $sql;
        }

        public function deletarString(){
            $sql =  "DELETE FROM " . $this->tabela;
            return $sql;
        }

        public function preencherQuery($stmt){
            
            if(isset($stmt["id"]) && $stmt["email"]){
                return $stmt["id"];
            }
            else if(isset($stmt["id"])){
                $stmt->bindParam("id", $stmt["id"]);
            }
            $stmt->bindParam(":nome", $this->nome);
            $stmt->bindParam(":numero", $this->numero);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":tipo_perfil", $this->tipo_perfil);
            $stmt->bindParam(":senha", $this->senha);
            $stmt->bindParam(":foto", $this->foto);
            
            return $stmt;
        }

//-------------------------------------------------------------------------------------------------------

        public function criarUsuario($foto, $nome, $numero, $email, $senha, $tipo_perfil) {
            $arquivo = new Arquivo;
            $caminho_da_foto = $arquivo->upload();
            
            if($caminho_da_foto === false){
                $caminho_da_foto = null;
            }
       
            $query = "INSERT INTO " . $this->tabela . " (foto, nome, numero, email, senha, tipo_perfil) VALUES (:foto, :nome, :numero, :email, :senha, :tipo_perfil)";
            $inserirUsuarioStmt = $this->conn->prepare($query);
    
            $inserirUsuarioStmt->bindParam(":foto", $caminho_da_foto);
            $inserirUsuarioStmt->bindParam(":nome", $nome);
    
            $numero = empty($numero) ? null : $numero;
            $inserirUsuarioStmt->bindParam(":numero", $numero);
    
            $inserirUsuarioStmt->bindParam(":email", $email);
            $inserirUsuarioStmt->bindParam(":senha", $senha);
            $inserirUsuarioStmt->bindParam(":tipo_perfil", $tipo_perfil);
    
            if ($inserirUsuarioStmt->execute()) {
                echo "Usuário criado com sucesso!";
                return true;
            } else {
                echo "Falha ao criar usuário!";
                return false;
            }
        }

        public function lerUsuario(){
            $query = "SELECT * ". $this->tabela;

            $lerStmt = $this->conn->prepare($query);
            $lerStmt->execute();
        }

        public function atualizarUsuario($id, $foto, $nome, $numero, $email, $senha, $tipo_perfil) {
            $arquivo = new Arquivo;
            $caminho_da_foto = $arquivo->upload();;

            if ($caminho_da_foto === false) {
                $foto = null;
            }
    
            $query = "UPDATE " . $this->tabela . " SET foto = :foto, nome = :nome, numero = :numero, email = :email, senha = :senha, tipo_perfil = :tipo_perfil";
    
            
            $query .= " WHERE id = :id";
            $atualizarUsuarioStmt = $this->conn->prepare($query);
    
            $atualizarUsuarioStmt->bindParam(':id', $id);
            $atualizarUsuarioStmt->bindParam(':foto', $foto);
            $atualizarUsuarioStmt->bindParam(':nome', $nome);
    
            $numero = empty($numero) ? null : $numero;
            $atualizarUsuarioStmt->bindParam(':numero', $numero);
    
            $atualizarUsuarioStmt->bindParam(':email', $email);
            $atualizarUsuarioStmt->bindParam(':senha', $senha);
            $atualizarUsuarioStmt->bindParam(':tipo_perfil', $tipo_perfil);
    
            if ($caminho_da_foto) {
                $atualizarUsuarioStmt->bindParam(':foto', $caminho_da_foto);
            }
    
            if ($atualizarUsuarioStmt->execute()) {
                echo "Usuário atualizado com sucesso!";
                return true;
            } else {
                echo "Falha ao atualizar usuário!";
                return false;
            }
        }

        public function deletarUsuario($id){
            $fotoQuery = 'SELECT foto FROM pessoas WHERE id = :id';
            $fotoStmt = $this->conn->prepare($fotoQuery);
            $fotoStmt->bindParam(':id', $id);
            $fotoStmt->execute();
        
            $foto = $fotoStmt->fetchColumn();
        
            if ($foto) {

                $caminho_foto = "$foto";
        
                if (file_exists($caminho_foto)) {
                    if (unlink($caminho_foto)) {
                        echo "Foto apagada com sucesso!";
                    } else {
                        echo "Erro ao tentar apagar a foto.";
                    }
                } else {
                    echo "Arquivo não encontrado.";
                }
            } else {
                echo "Foto não encontrada.";
            }
        
            $query = 'DELETE FROM ' . $this->tabela . ' WHERE id = :id';
            $deletarUsuarioStmt = $this->conn->prepare($query);
            $deletarUsuarioStmt->bindParam(':id', $id);
        
            if($deletarUsuarioStmt->execute()){
                echo 'Usuário deletado com sucesso!';
                return true;
            } else {
                echo 'Falha ao deletar usuário.';
                return false;
            }
        }
    }


?>