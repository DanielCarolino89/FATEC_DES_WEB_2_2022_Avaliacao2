
<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

require_once('./processos.php');
require_once('./conexao.php')  

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b># Welcome #</h1>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-danger">Cadastro Pessoas</a>
        <br><br>
</p>
<p>
        
        <a href="usuarios.php" class="btn btn-danger">Cadastro novos usuários</a>
        <br><br>
</p>
<hr>
<p>
    <h3>Pessoas já cadastradas</h3>

        <?php if($result->num_rows > 0): ?> 
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobenome</th>
                        <th scope="col">Curso</th>
                        <th scope="col">telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <?php echo "
                                <td>".$row["id"]."</td>
                                <td>".$row["nome"]."</td>
                                <td>".$row["sobrenome"]."</td>
                                <td>".$row["curso"]."</td>
                                <td>".$row["telefone"]."</td>";
                            ?>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Sem cadastro</p>
        <?php endif; ?>

        <br> 

        <h3>Usuários cadastrados</h3>

<?php if($result2->num_rows > 0): ?> 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Login</th>
                <th scope="col">Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result2->fetch_assoc()): ?>
                <tr>
                    <?php echo "
                        <td>".$row["id"]."</td>
                        <td>".$row["user"]."</td>
                        <td>".$row["senha"]."</td>";
                    ?>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Sem cadastro</p>
<?php endif; ?>

<br> 
        
        <a href="logout.php" class="btn btn-danger">SAIR</a>
    </p><br><br><br><br>
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