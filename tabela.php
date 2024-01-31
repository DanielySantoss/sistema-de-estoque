<?php
include "scripts.html";
include "conexao.php";
include "navbar.php"; 
$consulta = $conn->query("select id_venda,id_produto,nome,quantidade_v,data from vendas"); 
session_start();
include "conexao.php";
if ($_SESSION['login']=='ok'){
?>
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
    background-color:#9D4BFF;
    color: white;
}
</style>
<body class="body">
  

<div class="container">
  <h3 class="card-header">Tabela de Vendas Atualizada</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID venda</th>
      <th scope="col">ID produto</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Data</th>
     
    </tr>
  </thead>
  <?php 
            while ($exibir = $consulta->fetch(PDO::FETCH_ASSOC)){
            
            ?>
            <tr>
            <td> <?php echo $exibir['id_venda']; ?>  </td>
               <td> <?php echo $exibir['id_produto']; ?>  </td>
               <td> <?php echo $exibir['nome']; ?>  </td>
               <td> <?php echo $exibir['quantidade_v']; ?>  </td>
               <td> <?php echo $exibir['data']; ?>  </td>
              
               
               
   
    </tr>
   
   
 

<?php
            }
?></table>
<form action="frmvenda.php">
<button type="submit" class="btn btn-dark">Realizar Nova Venda</button></form>
</form>
</div></body>
<?php
            }else{header("location:login.php");}
?>