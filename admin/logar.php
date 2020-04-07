<?php
    session_start();
    require_once "../_app/Models/Login.class.php";
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        $login = new Login();//classe
        $logged = $login->logged($_SESSION['id']); 
    }else{
        header("Location: index.php?exe=restrict");
    }
    if(filter_input(INPUT_POST, 'username' , FILTER_DEFAULT) && !empty(filter_input(INPUT_POST, 'username' , FILTER_DEFAULT)) && filter_input(INPUT_POST, 'password' , FILTER_DEFAULT) && !empty(filter_input(INPUT_POST, 'password' , FILTER_DEFAULT))){
        $username = addslashes(filter_input(INPUT_POST, 'username' , FILTER_DEFAULT));
        $password = sha1(addslashes(filter_input(INPUT_POST, 'password' , FILTER_DEFAULT)));
        //Conexão
        require_once "../_app/Config.php";
        $pdo = conectar();
        //classe usuario de login
        require_once "../_app/Models/Login.class.php";
        $login = new Login();//classe
        if($login->logar($username, $password) == true){ //funcao publica
            if(isset($_SESSION['id'])){
                header("Location: painel.php");
            }else{
                header("Location: index.php?exe=desloged");
            }
        }
        else{
            header("Location: index.php?exe=desloged");
        }
    }else{
        header('Location: index.php?exe=desloged');
    }