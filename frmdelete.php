<?php
include "scripts.html"; 
include "navbar.php";?>
 <style>
        /* Estilize o formulário se desejar */
        .container {
            
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
            border: 2px solid ;
        }
    </style>
<div class="container">
<form action="delete.php" method="post">
 <h3>Deletar produto</h3>
<div class="form-group">
                    <label >ID do Produto:</label>
                    <input type="text" class="form-control" name="id" placeholder="Digite o ID" required>
                </div>
<br>
<button type="submit" class="btn btn-dark"> DELETAR </button></div>
</form>
<?php
?>

</form>