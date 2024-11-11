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

    public function cadastrar($data){

        $arquivo = new Arquivo;
        $caminho_da_foto = $arquivo->upload();
            
        if($caminho_da_foto === false){
            $caminho_da_foto = null;
        }

        $data["foto"] = $caminho_da_foto;

        $usuario = new Usuario($this->db);
        
        $usuario->fromPOST($data);
        
        $sql = $usuario->criarString();

        $inserirUsuarioStmt = $this->db->prepare($sql);

        $inserirUsuarioStmt = $usuario->preencherQuery($inserirUsuarioStmt);


        if ($inserirUsuarioStmt->execute()) {
            echo "Usuário criado com sucesso!";
            return true;
        } else {
            echo "Falha ao criar usuário!";
            return false;
        }

    }

    public function atualizar($data){
        $usuario = new Usuario($this->db);

        $usuario->fromPOST($data);

        $sql = $usuario->atualizarString();

        $atualizarUsuarioStmt = $this->db->prepare($sql);

        $atualizarUsuarioStmt = $usuario->preencherQuery($atualizarUsuarioStmt);

        if ($atualizarUsuarioStmt->execute()) {
            echo "Usuário criado com sucesso!";
            return true;
        } else {
            echo "Falha ao criar usuário!";
            return false;
        }
        
    }

    public function deletar($data){
        $usuario = new Usuario($this->db);

        $sql = $usuario->deletarString();

        $deletarUsuarioStmt = $this->db->prepare($sql);

        $ideletarirUsuarioStmt = $usuario->preencherQuery($deletarUsuarioStmt);

        if ($deletarUsuarioStmt->execute()) {
            echo "Usuário deletado com sucesso!";
            return true;
        } else {
            echo "Falha ao criar usuário!";
            return false;
        }
    }


}