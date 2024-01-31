<?php 
$servername = "127.0.0.1"; 
$username = "root";
$password = "";
$dbname = "gestao";


try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    
}
catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}

?>
