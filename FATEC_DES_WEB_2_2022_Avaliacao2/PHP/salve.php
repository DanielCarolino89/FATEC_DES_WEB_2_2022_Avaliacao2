<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro salve</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<?php

require_once('./conexao.php');

    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }

    $nome = ($_POST['name']);
    $sobrenome = ($_POST['sobrenome']);
    $curso = ($_POST['curso'] );
    $telefone = ($_POST['telefone'] );

    $sql = "INSERT INTO cadastro (id, nome, sobrenome, curso, telefone)
    VALUES (null, '$nome', '$sobrenome', '$curso', '$telefone' )";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $user = ($_POST['user']);
    $senha = ($_POST['senha']);

    $sql2 = "INSERT INTO usuario (id, user, senha)
    VALUES (null, '$user', '$senha')";

    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
   
    header("location: welcome.php");

?>
</body>
</html>