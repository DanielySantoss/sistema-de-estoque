<?php
include "scripts.html";
include "conexao.php";
include "navbar.php";
?>
<html> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Gerenciamento de Estoque</title>
    <!-- Inclua o link para o Bootstrap CSS -->
    <style>
    
.body {
    background-color: #f5f5f5; /* Cor de fundo clara */
    background-image: 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff); /* Padrão de caixas */
    background-size: 20px 20px; /* Tamanho do padrão de caixas */
}


        /* Estilize o formulário se desejar */
        .centralizado {
            
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            background-color: #fff; /* Fundo branco para conteúdo */
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.2); /* Sombra leve */
        }
    </style>
</head>
<body class="body">
    

<div class="container">
        <div class="centralizado">
            <h2>Cadastrar produto</h2>
            <form action="cadastroprod.php" method="post">
                <div class="form-group">
                    <label >ID do Produto:</label>
                    <input type="text" class="form-control" name="id" placeholder="Digite o ID" required>
                </div>
                <div class="form-group">
                    <label >Nome do Produto:</label>
                    <input type="text" class="form-control" name="nome_produto" placeholder="Digite o nome" required>
                </div>
                <div class="form-group">
                    <label >Quantidade:</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Digite a quantidade" required>
                </div>
                <div class="form-group">
                    <label >Valor:</label>
                    <input type="real" class="form-control" name="valor" step="0.01" placeholder="Digite o valor" required>
                </div>
                <div class="form-group">
                    <label >Fornecedor:</label>
                    <select class="form-control" name="fornecedor" required>
                        <option>Selecione um fornecedor</option>
                        <?php
            // Conectando com o banco para fazer o select
           
            $consulta = $conn->query("SELECT id, nome FROM fornecedores");

            
            while ($fornecedor = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $fornecedor['nome'] . '">' . $fornecedor['nome'] . '</option>';
            }
            ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</body>
    <!-- Inclua os scripts do Bootstrap (jQuery e Popper.js são necessários) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>






</html>