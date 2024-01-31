<?php 

include "scripts.html";
include "navbar.php";
session_start();
include "conexao.php";
if ($_SESSION['login']=='ok'){

try{
    // Consulta para obter a quantidade atual de cada produto subtraindo as vendas
    $sql = "SELECT
    p.id,
    p.nome_produto,
    p.quantidade - COALESCE(SUM(v.quantidade_v), 0) AS quantidade_atual,
    p.valor,
    p.fornecedor
FROM
    produtos p
LEFT JOIN
    (SELECT id_produto, SUM(quantidade_v) AS quantidade_v
    FROM vendas
    GROUP BY id_produto) v
ON
    p.id = v.id_produto
GROUP BY
    p.id, p.nome_produto, p.quantidade, p.valor, p.fornecedor
";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();}
    ?>

    <html>
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
.campo{
    max-width: 300px;
}
.card-header{
    font-size: 18px;
    font-weight: bold;
    background-color:#9D4BFF;
    color: white;
}
</style>
<body class="body">
    
<br>

    <div class="container">
    <div class="row">
<div class="col-md-3">
<h3>Pesquisar Produto</h3>
<form action="pesquisar_produto.php" method="post">
        <label for="id_produto">Digite o ID do Produto:</label>
        <input class="form-control" type="text" name="id_produto" id="id_produto" required>
        <br><input class="btn btn-dark" type="submit" value="Pesquisar">
    </form></div>



<br>

        <br>
        <div class="card-header">
    Tabela de Produtos Atualizados</div>
    <table class="table table-bordered">
        <thead >
            <tr>
            <th>ID do Produto</th>
                <th>Nome do Produto</th>
                <th>Quantidade Atual</th>
                <th>Valor Unitario</th>
                <th>Fornecedor</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $consulta = $conn->query("select id,nome_produto,quantidade,valor,fornecedor from produtos");
            $exibir = $consulta->fetch(PDO::FETCH_ASSOC);
            
            foreach ($resultados as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['nome_produto'] . '</td>';
                echo '<td>' . $row['quantidade_atual'] . '</td>';
                echo '<td>' . 'R$ ' . number_format($row['valor'], 2, ',', '.') . '</td>'; // Formata o valor em reais
                echo '<td>' . $row['fornecedor'] . '</td>';
                echo '<td><a href="frmeditar.php?id=' . $row['id'] . '" class="btn btn-dark ">Editar</a></td>';
                echo '<td><a href="frmdelete.php?id=' . $row['id'] . '" class="btn btn-dark ">Deletar</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <form action="frmproduto.php">
<button type="submit" class="btn btn-dark">Cadastrar Novo Produto</button></form>

</div>
<br>
</html>
</body>

<?php }else{header("location:login.php");}?>




