<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
require_once "includes/apenas-logado.php";
require_once "includes/abrebanco.php";
 require_once "includes/cabecalho.php";
  ?>

    <main>
        <?php 
        $login = $_POST['flogin'] ?? null;
        $senha = $_POST['fsen1'] ?? null;
        if(is_null($login) || is_null($senha)){
        echo"<p>Falha no cadastro, tente novamente!</p>";
        }
        else{
            $sql = "SELECT `login` FROM `usuarios` WHERE `login` = :l ";
            $query = $conexao->prepare($sql);
            $query->bindValue(':l', $login, PDO::PARAM_STR);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            $total = $query ->rowCount();
            if($total > 0){
                echo"<p> usuario $login já existe no sistema. Escolha outro nome </p>";
            }
            else{
                $hash = password_hash($senha, PASSWORD_DEFAULT);
                $sql = " INSERT INTO `usuarios`(`login`, `senha`) VALUES (:u , :s)";
                $query = $conexao->prepare($sql);
                $query->bindValue(":u", $login, PDO::PARAM_STR);
                $query->bindValue(":s", $hash, PDO::PARAM_STR);
            }
            try{
                $conexao->beginTransaction();
                $query->execute();
                $conexao->commit();
                echo"<p> usuario $login cadastrado :) </p>";
            }
            catch( Exception $e){
                $conexao->rollBack();
                // throw $e
                echo"<p>Falha ao adicionar o usuario Tente novamente.</p>";

            }
        }
        ?>
        <p>&#x1F448; <a href="index.php">Voltar</a></p>
    </main>
    <?php require_once "includes/fechabanco.php"?>
</body>
</html>