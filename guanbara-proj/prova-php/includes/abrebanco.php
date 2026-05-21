<?php 
    $banco = "prova";
    $tabela = "series";
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conex = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>