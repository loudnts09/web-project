<?php

    session_start();

    print('oi');

    $usuario = new AutenticacaoDeUsuario();

    $usuario->identificarUsuario($_POST['email'], $_POST['senha']);

    class AutenticacaoDeUsuario{
        private $autenticado = false;
        private $usuario_id = null;
        private $perfis = [1 => 'administracao', 2=> 'usuario'];
        private $usuario_perfi_id = null;
        private $usuarios = [
            ['id' => 1, 'email' => 'cuca@gmail.com', 'senha' => 123, 'perfil_id' => 1],
            ['id' => 2, 'email' => 'usuario@gmail.com', 'senha'=> 123, 'perfil_id' => 2],
        ];

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function identificarUsuario($email, $senha){
            foreach($this->usuarios as $usuario){
                if(($usuario['email'] == $email) && ($usuario['senha'] == $senha)){
                    $this->__set('autenticado', true);
                    $this->__set('usuario_id', $usuario['id']);
                    $this->__set('usuario_perfil_id', 'perfil_id');
                }
            }
            $this->validarUsuario();
        }

        public function validarUsuario(){
            if($this->autenticado){
                $_SESSION['autenticado'] = 'SIM';
                $_SESSION['id'] = $this->usuario_id;
                $_SESSION['perfil_id'] = $this->usuario_perfi_id;
                header('Location: home.php');
            }
            else{
                header('Location: index.php?login=erro');
                $_SESSION['autenticado'] = 'NAO';
            }
        }

    }

?>