<?php
require_once('./conexao.php');

    $user = ($_POST['username']);
    $senha = ($_POST['senha']);

    $sql = "SELECT user, senha  FROM usuario";
    $result = $conn->query($sql);
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        while($row = $result->fetch_assoc()){
            if($user==$row["user"] and $senha==$row["senha"] ){
                $_SESSION['loggedin'] = TRUE;
                $_SESSION["username"] = $row["user"];
                 header("location: welcome.php");
                 break;
            } else {
                echo "Erro Senha!";
                $_SESSION['loggedin'] = FALSE;
            }

        }
        if($_SESSION['loggedin']==FALSE){
            header("location: index.php");
        }
        
        
    }