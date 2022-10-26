<?php


require_once('./loginbanco.php');

// Criar Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar Conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "CONECTADO AO BANCO DE DADOS COM SUCESSO!";
?>