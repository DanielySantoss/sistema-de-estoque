<?php
include "scripts.html";
include "navbar.php";
session_start();
include "conexao.php";
if ($_SESSION['login']=='ok'){
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão</title> 
    <link rel="website icon" type="png" href="images/caixa.png">
    <!-- Inclua o link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
.body {
    background-color: #f5f5f5; /* Cor de fundo clara */
    background-image: 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff); /* Padrão de caixas */
    background-size: 20px 20px; /* Tamanho do padrão de caixas */
}
.container{
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff; /* Fundo branco para conteúdo */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
}
.card-header{
    font-size: 18px;
    font-weight: bold;
    background-color:#9D4BFF;
    color: white;
}




</style>
</head>
<body class="body">
  <div class="container">
    <div class="container mt-4">
        <h1>Bem-vindo à Gestão de Estoque</h1> 
        <br>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-header">Produtos</h5>
                        <p class="card-text">Gerencie seus produtos aqui.</p>
                        <a href="quantidade.php" class="btn btn-dark">Ir para Produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-header">Fornecedores</h5>
                        <p class="card-text">Gerencie seus fornecedores aqui.</p>
                        <a href="fornecedores.php" class="btn btn-dark">Ir para Fornecedores</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-header">Vendas</h5>
                        <p class="card-text">Acesse relatórios e vendas.</p>
                        <a href="tabela.php" class="btn btn-dark">Ir para Vendas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclua os scripts do Bootstrap (jQuery e Popper.js são necessários) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div></body>
</html>

</html>
<?php }else{header("location:login.php");} ?>