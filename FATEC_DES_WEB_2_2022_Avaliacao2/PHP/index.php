<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'FATEC';
         header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>ACESSO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        h1{font-size: 58px; font-weight: 900; text-align: center; }
        .wrapper{ margin:auto; width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <h1># LOGIN DE USUÁRIO #</h1>
    <div class="wrapper">
        <h2># ACESSO #</h2><BR>
        <p>INSERIR LOGIN E SENHA PARA ACESSO</p><BR><BR>
        <form action="login.php" method="post">
            <div class="form-group">
                <label>LOGIN:</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>SENHA:</label>
                <input type="password" name="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Acessar">
            </div>
        </form>
    </div>   
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