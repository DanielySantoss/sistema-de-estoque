
<?php include "navbar.php";?>
<br>
<br>
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
    color: white;
    background-color: #9D4BFF;
}
</style>
<body class="body">
    

<div class="container">
    
    <div class="card-header" >Detalhes do produto</div>
<table class="table table-bordered">
        <thead>
            <tr>
            <th>ID do Produto</th>
                <th>Nome do Produto</th>
                <th>Quantidade Atual</th>
                <th>Valor Unitario</th>
                <th>Fornecedor</th>
                
            </tr>
        </thead>
        <tbody>
            <?php include "conexao.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produto = $_POST['id_produto'];

    // Conecte-se ao banco de dados e faça uma consulta para buscar o produto pelo ID
    // Substitua estas linhas com seu próprio código de conexão e consulta
   
    $consulta = $conn->prepare("SELECT * FROM produtos WHERE id = :id_produto");
    $consulta->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
    $consulta->execute();

    // Verifique se o produto foi encontrado
    if ($produto = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
        //echo '<h3>Detalhes do Produto</h3>';
        echo '<td>' . $produto['id'] . '</td>';
        echo '<td>' . $produto['nome_produto'] . '</td>';

        echo '<td> ' . $produto['quantidade'] . '</td>';
        echo '<td>' . 'R$ ' . number_format($produto['valor'], 2, ',', '.') . '</td>'; // Formata o valor em reais
        echo '<td> ' . $produto['fornecedor'] . '</td>';
        // Adicione outras informações do produto conforme necessário 
          ?> </tbody>
    </table></div></body>
    <?php } else {
        echo 'Produto não encontrado.';
    }
}
?>

        
     