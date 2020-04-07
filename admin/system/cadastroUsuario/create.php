<?php
    $data = array(
        "firstname" => $firstname = filter_input(INPUT_POST, "firstname", FILTER_DEFAULT),
        "lastname" => $lastname = filter_input(INPUT_POST, "lastname", FILTER_DEFAULT),
        "username" => $username = filter_input(INPUT_POST, "username", FILTER_DEFAULT),
        "password" => $password = filter_input(INPUT_POST, "password", FILTER_DEFAULT)
    );
    if (in_array('',$data)) { 
        header("Location:painel.php?exe=cadastroUsuario/index&condition=data");   
    }else{
        $firstname = filter_input(INPUT_POST, "firstname", FILTER_DEFAULT);
        $lastname = filter_input(INPUT_POST, "lastname", FILTER_DEFAULT);
        $username = filter_input(INPUT_POST, "username", FILTER_DEFAULT);
        $password = filter_input(INPUT_POST, "password", FILTER_DEFAULT);

        require_once("../_app/Config.php");
        require "../_app/Conn/Create.class.php";
        $create = new Create();
        $create->ExeCreate($firstname, $lastname, $username, $password);
   }
    

