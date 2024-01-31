<?php 
include "navbar.php";
include "conexao.php";
?> 


<html>  <style>
        /* Estilize o formulário se desejar */
        .container {
            
            margin: 30px auto;
            max-width: 400px;
            padding: 20px;
            border: 2px solid ;
        }
    </style>
<div class="container">
    <h3>Editar Produto</h3>
<form action="editar.php" method="post">
                
<div class="form-group">
            <label for="produto">Selecione o Produto:</label>
        <select class="form-control" name="produto" id="produto" required>
            <option value=''>Selecione:</option>
            <?php
            // Conecte-se ao banco de dados e faça uma consulta para obter os produtos
            // Substitua estas linhas com seu próprio código de conexão e consulta
            $consulta = $conn->query("SELECT id, nome_produto FROM produtos");

            // Loop através dos resultados e crie as opções do select
            while ($produto = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $produto['id'] . '">' . $produto['nome_produto'] . '</option>';
            }
            ?>
        </select>
            </div>
                <div class="form-group">
                    <label >Nome do Produto:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome" required>
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
                        <option>Fornecedor 1</option>
                        <option>Fornecedor 2</option>
                        <option>Fornecedor 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Atualizar</button>
            </form></div>
</html>