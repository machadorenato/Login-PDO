<?php
    require_once("../_app/Config.php");
    class Create{
        public function ExeCreate($first,$last,$user,$pass) {  
            $pdo = conectar();
            $sql = $pdo->prepare("INSERT INTO userLogin (firstname, lastname,username,password) Values(:first, :last, :user, :pass)");
            $sql->bindParam(":first", $first);
            $sql->bindParam(":last", $last);
            $sql->bindParam(":user", $user);
            $sql->bindParam(":pass", sha1($pass));
            $sql->execute();
            
            header("Location:painel.php?exe=cadastroUsuario/index&condition=created");
        }
    }   

