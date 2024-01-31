<?php include "conexao.php"; 


$produto_id = $_POST['produto']; 
$quantidadevenda = $_POST['quantidadevenda']; 
$nome= $_POST['nome'];
$data = $_POST['data'];


$inserir = $conn->query("insert into vendas (id_produto,nome,quantidade_v,data) 
values ('$produto_id','$nome','$quantidadevenda','$data') "); 
header("location:tabela.php") ;
?>