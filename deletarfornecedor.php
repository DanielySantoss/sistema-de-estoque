<?php
include "conexao.php"; 

$id = $_POST['id_fornecedor']; 

 

$deletar = $conn->query("delete from fornecedores where id = '$id'"); 


include "fornecedores.php";

?> <input type="hidden" name="usuario" value=<?php echo "$id" ?>>