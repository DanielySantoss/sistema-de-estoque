<?php include "navbar.php";
include "conexao.php";?>
<style>
.container {
            
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
            border: 2px solid ;
             background-color: #fff; /* Fundo branco para conteúdo */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
        }
.body {
    background-color: #f5f5f5; /* Cor de fundo clara */
    background-image: 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff); /* Padrão de caixas */
    background-size: 20px 20px; /* Tamanho do padrão de caixas */
}

        
        </style>
<body class="body">
    

<div class="container">
        <div class="centralizado">
            <h2>Cadastrar fornecedor</h2>
            <form action="cadastrofornecedor.php" method="post">
                <div class="form-group">
                    <label >Nome:</label>
                    <input type="text" class="form-control" name="nome_fornecedor" placeholder="Digite o nome" required>
                </div>
                <div class="form-group">
                    <label >Telefone</label>
                    <input type="number" class="form-control" name="telefone_fornecedor" placeholder="Digite o telefone" required>
                </div>
                
                <div class="form-group">
                    <label >Status:</label>
                    <select class="form-control" name="status" required>
                        <option>Selecione o status</option> 
                        <option value="ativo">Ativo</option> 
                        <option value="inativo" >Inativo </option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label >CNPJ</label>
                    <input type="number" class="form-control" name="cnpj_fornecedor" placeholder="Digite o CNPJ" required>
                </div>
            
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </div>
    </div></body>