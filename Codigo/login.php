<?php
session_start();

$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', '123*Mudar'); 
$consulta = $db->query('SELECT * FROM usuarios'); 
$usuariosBd = $consulta->fetchAll(); 


if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario=$_POST["usuario"];
    $senha=$_POST["senha"];


    foreach ($usuariosBd as $user) {
        if ($usuario===$user['nome'] && $senha===$user['senha']) {
            $_SESSION["usuario"]=$usuario;
            $_SESSION["id"]=$user["id"];
            header("Location: dashboard.php");
            exit();
        } 
    }
    echo "<h2>Usuário ou senha incorretos</h2>";
        
        
} else {
    echo "<h2>Acesso negado.</h2>";
}