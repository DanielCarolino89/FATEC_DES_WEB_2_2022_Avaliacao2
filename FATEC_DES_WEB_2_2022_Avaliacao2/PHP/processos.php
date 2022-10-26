<?php

    require_once('./conexao.php');

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }
        //Solicitar todos os usuários cadastrados:
        $sql = "SELECT * FROM cadastro";
        $result = $conn->query($sql);   

         //Solicitar todos os usuários cadastrados:
         $sql2 = "SELECT * FROM usuario";
         $result2 = $conn->query($sql2);   

    

    

    




