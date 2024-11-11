<?php

    require "../config/database.php";
    require "usuario.php";

    session_start();

    $database = new Database();
    $db = $database->conectar();

    $usuario = new AutenticacaoDeUsuario($db);

    $usuario->identificarUsuario($_POST['email'], $_POST['senha']);

    class AutenticacaoDeUsuario{
        private $conn;
        private $autenticado = false;
        private $usuario_id = null;
        private $usuario_perfil = null;

        public function __construct($db){
            $this->conn = $db;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function identificarUsuario($email, $senha){
            $query = "SELECT id, email, senha, tipo_perfil FROM pessoas WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                if($senha == $usuario["senha"]){
                    $this->__set('autenticado', true);
                    $this->__set('usuario_id', $usuario['id']);
                    $this->__set('usuario_perfil', $usuario['tipo_perfil']);    
                }
            }

            $this->validarUsuario();

        }

        public function validarUsuario(){
            if($this->autenticado){
                $_SESSION['autenticado'] = 'SIM';
                $_SESSION['id'] = $this->usuario_id;
                $_SESSION['perfil'] = $this->usuario_perfil;
                header('Location: ../views/home.php');
                exit();
            }
            else{
                header('Location: ../index.php?login=erro');
                $_SESSION['autenticado'] = 'NAO';
                exit();
            }
        }

    }

?>