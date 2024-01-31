<?php 
if (session_status() === PHP_SESSION_NONE) {
    // Se a sessão não estiver ativa, inicia uma nova sessão
    session_start();
  }
   $_SESSION['login']=''; 
   header('location:login.php'); 

?> 