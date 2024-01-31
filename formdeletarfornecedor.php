<?php 
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilize o formulário se desejar */
        .container {
            
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
            border: 2px solid ;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="deletarfornecedor.php" method="post">
    <h3>Deletar produto</h3>
<div class="form-group">
                    <label >ID do Fornecedor:</label>
                    <input type="text" class="form-control" name="id_fornecedor" placeholder="Digite o ID" required>
                </div>
<br>
<button type="submit" class="btn btn-dark"> DELETAR </button></div>
</form>
</div>
</body>
</html>