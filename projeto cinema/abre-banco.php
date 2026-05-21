<?php 
    $banco = "cinema";
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>