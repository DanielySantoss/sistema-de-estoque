<?php
include "conexao.php"; 


$nome_fornecedor = $_POST['nome_fornecedor']; 
$telefone = $_POST['telefone_fornecedor']; 
$status = $_POST['status']; 
$cnpj = $_POST['cnpj_fornecedor'];

$inserir = $conn->query("insert into fornecedores (nome,telefone,status,cnpj) 
values ('$nome_fornecedor','$telefone','$status','$cnpj') "); 
include "fornecedores.php";
?>