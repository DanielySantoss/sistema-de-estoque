<?php 
include "navbar.php";
include "conexao.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Vendas</title>
    <!-- Inclua o link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilize o formulário se desejar */
        
    
    .body {
        background-color: #f5f5f5; /* Cor de fundo clara */
        background-image: 
            linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), 
            linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff); /* Padrão de caixas */
        background-size: 20px 20px; /* Tamanho do padrão de caixas */
    }
        
        .container {
            
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
             
            background-color: #fff; /* Fundo branco para conteúdo */
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2); /* Sombra leve */
        }
    </style>
</head>
<body class="body">
    <div class="container" >
        <h2>Registrar Venda</h2>
        <form action="vendas.php" method="post">
            <div class="form-group">
            <label for="produto">Selecione o Produto:</label>
        <select class="form-control" name="produto" id="produto" required>
            <option value=''>Selecione:</option>
            <?php
            // Conectando com o banco para fazer o select
           
            $consulta = $conn->query("SELECT id, nome_produto FROM produtos");

            
            while ($produto = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $produto['id'] . '">' . $produto['nome_produto'] . '</option>';
            }
            ?>
        </select>
            </div>
            <div class="form-group">
                <label for="quantidade">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidadevenda" placeholder="Digite a quantidade" required>
            </div>
            

            <div class="form-group">
                <label for="data">Data da Venda:</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            
            <button type="submit" class="btn btn-dark">Registrar Venda</button>
        </form>
    </div>

    <!-- Inclua os scripts do Bootstrap (jQuery e Popper.js são necessários) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>








