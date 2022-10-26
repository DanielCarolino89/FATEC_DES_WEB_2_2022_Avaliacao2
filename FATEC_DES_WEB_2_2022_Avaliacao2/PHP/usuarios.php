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
    <title>Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{ width: 500px; padding: 40px; }
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class= "wrapper">
        <h2># CADASTRO DE NOVOS USUARIOS #</h2>
        <p>INFORMANDO OS DADOS:</p>
        <form action="salve.php" method="post">
            <div class="form-group">
                <label for="name">Informe seu LOGIN:</label>
                <input type="text" id = "user" name="user" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="name">Informe sua SENHA:</label>
                <input type="text" id = "senha" name="senha" class="form-control">
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