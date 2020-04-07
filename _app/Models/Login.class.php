<?php
    session_start();
    require_once "../_app/Config.php";
    class Login{
        public function logar($username,$password) {
            $pdo = conectar();
            $sql = $pdo->prepare("SELECT *FROM userLogin WHERE username =:user AND password =:pass");
            $sql->bindValue(":user",$username);
            $sql->bindValue(":pass",$password);
            $sql->execute();
            if($sql->rowCount() > 0){
                $res = $sql->fetch();
                $_SESSION['id'] = $res['id'];
                $_SESSION['firstname'] = $res['firstname'];
                $_SESSION['lastname'] = $res['lastname'];
                return true;
            }else{
                return false;
            }
        }
        
        public function logged($id) {
            $pdo = conectar();
            $array = array();
            
            $sql = $pdo->prepare("SELECT *FROM userLogin WHERE id =:id");
            $sql->bindValue(":id",$id);
            $sql->execute();
            
            if($sql->rowCount() > 0){
                $array = $sql->fetch();
                return $array;
            }
        }
    }