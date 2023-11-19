<?php
    require_once("classOperations.php");

    class Connect extends OperationsConnectDB {
        public function connect(){
            try {
                $pdo = new PDO("mysql:host=".$this->hostDB.";dbname=".$this->nameDB, $this->userDB, $this->passDB);
                $pdo->exec("SET FOREIGN_KEY_CHECKS=0");
                return $pdo;


            }catch (PDOException $e){
                echo("<script>alert('Can't connect on database... try again latter !')</script>");

                
            }

        }

    }




?>