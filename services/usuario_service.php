<?php

include("../config/database.php");
include("../model/upload.php");
include("../model/usuario.php");

class UsuarioService{

    private $db;
    
    public function __construct(){
        $database = new Database();
        $this->db = $database->conectar();
    }

    public function cadastrar($data, $id){

        $arquivo = new Arquivo;
        $caminho_da_foto = $arquivo->upload();
        
        if($caminho_da_foto === false){
            $caminho_da_foto = null;
        }
        
        $data["foto"] = $caminho_da_foto;

        $usuario = new Usuario($this->db);
        
        $usuario->fromPOST($data, $id);
        
        $sql = $usuario->criarString();

        $inserirUsuarioStmt = $this->db->prepare($sql);

        $inserirUsuarioStmt = $usuario->preencherQuery($inserirUsuarioStmt, null);


        if ($inserirUsuarioStmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function atualizar($data, $id){

        $arquivo = new Arquivo;
        $caminho_da_foto = $arquivo->upload();
        
        if($caminho_da_foto === false){
            $caminho_da_foto = null;
        }

        $data["foto"] = $caminho_da_foto;

        $usuario = new Usuario($this->db);

        $usuario->fromPOST($data, $id);

        $sql = $usuario->atualizarString();

        $atualizarUsuarioStmt = $this->db->prepare($sql);

        $atualizarUsuarioStmt = $usuario->preencherQuery($atualizarUsuarioStmt, 'atualizar');

        if ($atualizarUsuarioStmt->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

    public function deletar($data, $id){
        $usuario = new Usuario($this->db);

        $usuario->fromPOST($data, $id);

        $sql = $usuario->deletarString();

        $deletarUsuarioStmt = $this->db->prepare($sql);

        $deletarUsuarioStmt = $usuario->preencherQuery($deletarUsuarioStmt, 'deletar');

        if ($deletarUsuarioStmt->execute()) {
            header('Location: ../index.php?usuario=deletado');
            exit();
        } else {
            header('Location: ../views/perfil.php?usuario=presente');
            return false;
        }
    }

    public function ler($data, $id){

        $usuario = new Usuario($this->db);

        $usuario->fromPOST($data, $id);


        $sql = $usuario->lerString();

        $lerUsuarioStmt = $this->db->prepare($sql);

        $lerUsuarioStmt = $usuario->preencherQuery($lerUsuarioStmt, 'ler');

        if ($lerUsuarioStmt->execute()) {
            $dadosUsuario = $lerUsuarioStmt->fetch(PDO::FETCH_ASSOC);
            if($dadosUsuario){
                $_SESSION['dados'] = $dadosUsuario;
                return true;
            }
            else{
                return false;
            }
        }
        else {
            return false;
        }
    }
}