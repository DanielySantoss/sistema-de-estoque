<?php 
include "conexao.php"; 


$id = $_POST['id']; 
$nome = $_POST['nome']; 
$quantidade = $_POST['quantidade']; 
$valor = $_POST['valor'];
$fornecedor = $_POST['fornecedor'];

$alterar = $conn->query("update produtos set 
id='$id', nome='$nome', quantidade='$quantidade', valor='$valor', fornecedor='$fornecedor' where id='$id' "); 
include "quantidade.php";
?>