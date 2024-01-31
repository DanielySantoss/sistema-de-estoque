<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Gerenciamento de Estoque</title>
    <!-- Inclua os links para os recursos do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>Dashboard de Gerenciamento de Estoque</h1>
        <div class="row">
            <!-- Painel de Resumo -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Resumo</div>
                    <div class="card-body">
                        <!-- Exibir informações de resumo aqui -->
                        <p>Produtos em Estoque: 100</p>
                        <p>Produtos Vendidos: 50</p>
                        <p>Produtos em Falta: 10</p>
                    </div>
                </div>
            </div>
            <!-- Lista de Produtos -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Produtos</div>
                    <div class="card-body">
                        <!-- Tabela de produtos -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Produto</th>
                                    <th>Quantidade</th>
                                    <th>Valor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Preencher a tabela com dados reais do banco de dados -->
                                <tr>
                                    <td>1</td>
                                    <td>Produto A</td>
                                    <td>50</td>
                                    <td>R$ 50.00</td>
                                    <td>
                                        <a href="#">Editar</a> |
                                        <a href="#">Excluir</a>
                                    </td>
                                </tr>
                                <!-- Adicionar mais linhas conforme necessário -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>