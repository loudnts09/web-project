<?php

        class Database{
                private $host = 'localhost';
                private $db_name = 'pizzaria_do_cuca';
                private $username = 'root';
                private $password = '';
                private $conn;

                public function conectar(){
                        $this->conn = null;

                        try{
                                $this->conn = new PDO("mysql:host=". $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                echo "conexão bem sucedida    ";
                        }
                        catch(PDOException $e){
                                echo "Erro de conexão". $e->getMessage();
                        }
                        
                        return $this->conn;
                }
        }

        $database = new Database();
        $database->conectar();

?>