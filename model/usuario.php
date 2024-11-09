<?php

require "upload.php";

    class Usuario{
        private $conn;
        private $tabela = 'pessoas';

        public function __construct($db){
            $this->conn = $db;
        }

        public function criarUsuario($foto, $nome, $numero, $email, $senha, $tipo_perfil) {
            $caminho_da_foto = upload();

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
            $diretorio = "../uploads/";
            $caminho_foto = null;
    
            if (!empty($foto['name'])) {
                $caminho_foto = $diretorio . uniqid() . "_" . basename($foto['name']);
                if (!move_uploaded_file($foto['tmp_name'], $caminho_foto)) {
                    echo "Erro ao fazer upload da foto!";
                    return false;
                }
            }
    
            $query = "UPDATE " . $this->tabela . " SET nome = :nome, numero = :numero, email = :email, senha = :senha, tipo_perfil = :tipo_perfil";
    
            if ($caminho_foto) {
                $query .= ", foto = :foto";
            }
            
            $query .= " WHERE id = :id";
            $atualizarUsuarioStmt = $this->conn->prepare($query);
    
            $atualizarUsuarioStmt->bindParam(':id', $id);
            $atualizarUsuarioStmt->bindParam(':nome', $nome);
    
            $numero = empty($numero) ? null : $numero;
            $atualizarUsuarioStmt->bindParam(':numero', $numero);
    
            $atualizarUsuarioStmt->bindParam(':email', $email);
            $atualizarUsuarioStmt->bindParam(':senha', $senha);
            $atualizarUsuarioStmt->bindParam(':tipo_perfil', $tipo_perfil);
    
            if ($caminho_foto) {
                $atualizarUsuarioStmt->bindParam(':foto', $caminho_foto);
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