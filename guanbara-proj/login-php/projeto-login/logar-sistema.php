<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php
    require_once "includes/abrebanco.php";
    require_once "includes/cabecalho.php";
    ?>
    <main>
        <?php
        $usu = $_POST['fusu'] ?? '';
        $sen = $_POST['fsen'] ?? '';

        $sql = "SELECT * FROM `usuarios` WHERE login = :u LIMIT 1";
        $query = $conexao->prepare($sql);
        $query->bindValue(':u', $usu, PDO::PARAM_STR);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        $total = $query->rowCount();
        if ($total == 0) {
            echo "<p> usario $usu não foi encontrado no sistema </p>";
        } else {
            $dados = $query->fetch();
            if (password_verify($sen, $dados['senha'])) {
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $dados['login'];
                header("location:index.php");
                exit;
            } else {
                echo "<p> a senha esta invalida para o usuario $usu.</p>";
            }
        }
        ?>
        <p>&#x1F448; <a href="index.php">Voltar</a></p>
    </main>
    <?php include_once "includes/fechabanco.php"; ?>
</body>

</html>