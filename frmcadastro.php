<?php include "navbar.php"?>
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
            <h2>Cadastrar Usuário</h2>
            <form action="cadastrouser.php" method="post">
                <div class="form-group">
                    <label >Nome:</label>
                    <input type="text" class="form-control" name="nome_usuario" placeholder="Digite o nome" required>
                </div>
                <div class="form-group">
                    <label >E-mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite o email" required>
                </div>
                <div class="form-group">
                    <label >Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="Digite a senha" required>
                </div>
            
                <div class="form-group">
                    <label >Acesso:</label>
                    <select class="form-control" name="acesso" required>
                        <option>Selecione o acesso</option> 
                        <option value="adm">Administrador</option> 
                        <option value="user" >Usuario </option>
                        
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </div>
    </div></body>