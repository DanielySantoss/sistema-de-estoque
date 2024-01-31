
<?php
include "conexao.php"; 


$email = $_POST['email']; 
$nome = $_POST['nome_usuario']; 
$senha = $_POST['senha']; 
$acesso = $_POST['acesso'];

$inserir = $conn->query("insert into usuario (email,nome,senha,acesso) 
values ('$email','$nome','$senha','$acesso') "); 
include "home.php";
?>