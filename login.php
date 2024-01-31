<?php
include "navbar.php";
include "conexao.php";
?>

    <style>
.body {
    background-color: #f5f5f5; /* Cor de fundo clara */
    background-image: 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff), 
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff); /* Padrão de caixas */
    background-size: 20px 20px; /* Tamanho do padrão de caixas */
}
.container {
            
            margin: 30px auto;
            max-width: 420px;
            padding: 20px;
            border: 2px solid gray ; 
            background-color: #fff; /* Fundo branco para conteúdo */
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1); /* Sombra leve */
        }</style>
         <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel='stylesheet'>
         <link rel="stylesheet" href="styles_loginn.css">
<body class="body">
    
</body>


<div class="loginn">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/Barcode-amico.svg" alt="">
                </div>

                <div class="login__forms">
                    <form action="validar.php" method="post" class="login__registre" id="login-in">
                        <h1 class="login__title">Login</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="email" placeholder="E-mail" class="login__input" name="email" required>
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Senha" class="login__input" name="senha" required>
                        </div>

                        

                         <button type="submit" class="login__button" > Entrar</button>
                        <div>
                            <span class="login__account">Não tem uma conta?</span>
                            <span class="login__signin" id="sign-up">Cadastrar</span>
                        </div>
                    </form>

                    <form action="cadastrouser.php" method="post" class="login__create none" id="login-up">
                        <h1 class="login__title">Criar Conta</h1>
    
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="text" placeholder="Nome" name="nome" class="login__input" required>
                        </div>

                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="email" placeholder="Email" name="email" class="login__input" required >
                        </div>
 
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Senha" name="senha" class="login__input" required>
                        </div>

                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                           <select name="acesso" id="" class="select" required> 
                            <option value=""> Acesso - Selecione: </option>
                            <option value="adm">Administrador</option>
                            <option value="user">Usuario</option>
                           </select>
                        </div>
                       
                

                       
                        <button type="submit"class="login__button">Cadastrar</button>
                        

                        <div>
                            <span class="login__account">Já tem uma conta ?</span>
                            <span class="login__signup" id="sign-in">Entrar</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/js/main.js"></script>
    </body>
</html>