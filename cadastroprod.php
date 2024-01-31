<?php include "conexao.php"; 


$id = $_POST['id']; 
$nome = $_POST['nome_produto']; 
$quantidade = $_POST['quantidade']; 
$valor = $_POST['valor'];
$fornecedor = $_POST['fornecedor'];

$inserir = $conn->query("insert into produtos (id,nome_produto,quantidade,valor,fornecedor) 
values ('$id','$nome','$quantidade','$valor','$fornecedor') "); 
header("location:quantidade.php");
?>