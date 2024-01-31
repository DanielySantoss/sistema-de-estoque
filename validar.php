<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
include "conexao.php";
session_start(); 
$_SESSION['login']='';
 
$consulta = $conn->query("select senha,nome,acesso from usuario where email='$email'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
 
if ($linha){
 
    if ($linha['senha']==$senha){
        $_SESSION['login']='ok';
        if ($linha['acesso']=='adm'){
           $_SESSION['acesso'] = 'adm';      
        }
        else {
             $_SESSION['acesso'] = 'user'  ; 
       }


       header("location:home.php");

    }else{
        if($linha['senha']!=$senha){

            echo "senha incorreta";
        }
    }
}          
                    else 
                    {
                        echo "email não cadastrado";
                        $_SESSION['login']='';
                    }
                
        //{header('location:login.php');}