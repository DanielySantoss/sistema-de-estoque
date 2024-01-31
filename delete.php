<?php
include "conexao.php"; 

$id = $_POST['id']; 

 

$deletar = $conn->query("delete from produtos where id = '$id'"); 


include "quantidade.php";

?> <input type="hidden" name="usuario" value=<?php echo "$id" ?>>