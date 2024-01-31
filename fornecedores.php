<?php
include "scripts.html";
include "navbar.php";
include "conexao.php";
session_start();



if ($_SESSION['login']=='ok'){
$consulta = $conn->query("select id,nome,telefone,status,cnpj from fornecedores");
            $exibir = $consulta->fetchAll(PDO::FETCH_ASSOC);
            





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Fornecedores</title>
    <!-- Inclua os links para os recursos do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .body {
    background-color: #f5f5f5; /* Cor de fundo clara */
    background-image: 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff); /* Padrão de caixas */
    background-size: 20px 20px; /* Tamanho do padrão de caixas */
}
    .card-header{
        background-color: #9D4BFF;
         font-weight: bold;
         font-size: 18px;
         color: white;
    }
    .card-body{
        
    }
</style>

</head>
<body class="body">
    <div class="container mt-4">
        <h1>Dashboard de Fornecedores</h1>
        <div class="row">
            <!-- Painel de Resumo -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Resumo</div>
                    <div class="card-body">
                        <!-- Exibir informações de resumo aqui -->

                       <?php try {
    // Consulta para contar o número de fornecedores
    $sql = "SELECT COUNT(*) AS total_fornecedores FROM fornecedores";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    // Exibe o número de fornecedores cadastrados
   //conta os ativos
   $sql = "SELECT COUNT(*) AS total_fornecedoresativos FROM fornecedores WHERE status='ativo'";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $resultados = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?><p>Fornecedores Cadastrados: <?php echo $resultado['total_fornecedores'];?></p>
                        <p>Fornecedores Ativos:  <?php echo $resultados['total_fornecedoresativos'];?></p>
                        <p>Fornecedores Inativos: --</p>
                    </div>
                </div>
            </div>
            <!-- Lista de Fornecedores -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Lista de Fornecedores</div>
                    <div class="card-body">
                        <!-- Tabela de fornecedores -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Fornecedor</th>
                                    <th>Telefone</th>
                                    <th>Status</th>
                                    <th>CNPJ</th>
                                   <th>Mais</th> 
                                   <th>Ações</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
            
            foreach ($exibir as $fornecedor) {
            
                ?>
                <tr>
                <td> <?php echo $fornecedor['id']; ?>  </td>
                   <td> <?php echo $fornecedor['nome']; ?>  </td>
                   <td> <?php echo $fornecedor['telefone']; ?>  </td>
                   <td> <?php echo $fornecedor['status']; ?>  </td>
                   <td> <?php echo $fornecedor['cnpj']; ?>  </td>
              <td> <a href="">Saber mais</a> </td>
                    <td> <a href="formdeletarfornecedor.php" class="btn btn-dark"> DELETAR</a>  </td>

                     </tr>
                <?php  }
            ?> 
            
                                <!-- Adicionar mais linhas conforme necessário -->
                            </tbody>
                        </table> <a href="formfornecedor.php"class="btn btn-dark" >Cadastrar fornecedor</a>
            </div>
                    </div>
                   
                </div>
        </div>
    </div>
</body>
</html>
<?php }else{header("location:login.php");}?>