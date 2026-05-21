<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Avaliação Filmes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once "cabecalho.php"; ?>
    <main>
        <h1>Novo gênero</h1>
        <?php 
            $g = $_REQUEST['tgen'] ?? '';
            if(empty($g)) {
                echo "<p>Você precisa preencher pelo menos um gênero para cadastrar.</p>";
            } else {
                $generos = explode(',', $g);
                $sql = "INSERT INTO `genero` (`genero`) VALUES ";
                foreach($generos as $gen) {
                    // Remove os espaços que o usuário tenha digitado
                    $gen = trim($gen);
                    // Faz a busca pra ver se o genero já existe
                    $busca = "SELECT * FROM `genero` WHERE `genero` = '$gen'";
                    $query = $conexao->prepare($busca);
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    $query->execute();
                    $total = $query->rowCount();
                    if($total == 0) {
                        // Acrescenta no Insert
                        $sql .= "('$gen'),";
                    } else {
                        echo "<p>&#x274C; <strong>$gen</strong> já foi cadastrado.</p>";
                    }
                }
                $sql = rtrim($sql, ","); // remover a última vírgula
                $query = $conexao->prepare($sql);

                try {
                    $conexao->beginTransaction();
                    $query->execute();
                    $conexao->commit();

                    echo "<p>&#x2705; Inclusão realizada com sucesso!</p>";

                } catch (Exception $e) {
                    $conexao->rollBack();
                    //throw $e;
                    echo "<p>&#x274C; Não foi possível efetuar essa operação. Tente novamente.</p>";
                }
            }
        ?>
        <a href="cad-genero.php" class="botao">Voltar</a>
    </main>
</body>
</html>