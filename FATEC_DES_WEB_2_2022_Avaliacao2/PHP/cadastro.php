<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{ width: 500px; padding: 40px; }
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class= "wrapper">
        <h2># CADASTRO DO CURSO #</h2>
        <p>INFORMANDO OS DADOS:</p>
        <form action="salve.php" method="post">
            <div class="form-group">
                <label for="name">Informe seu nome:</label>
                <input type="text" id = "name" name="name" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="name">Informe seu sobrenome:</label>
                <input type="text" id = "sobrenome" name="sobrenome" class="form-control">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label for="name">Curso desejado:</label>
                <input type="text" id = "curso" name="curso" class="form-control">
                <span class="help-block"></span>
            </div>   
            <div class="form-group">
                <label for="telefone">Telefone para contato:</label>
                <input type="text" id= "telefone" name="telefone" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Cadastrar">
            </div><br><br>
        </form>
        <div class="form-group">
        <a href="welcome.php" class="btn btn-danger">Voltar</a>
        </div>
    </div> 
    
    <br><br><br>  

    <footer align="center" style=color:darkblue class="mt-4 mb-4">

<p>
    <h7><strong>
                  Copyright © 2022 - todos os direitos reservados</p>
               <p> Daniel de Godoy Carolino
            </p></h7></strong>

        </div>
</footer>
</body>
</html>