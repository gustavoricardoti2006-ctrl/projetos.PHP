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
        <h1>Novo filme</h1>
        <?php 
            $ftit = $_REQUEST['ttit'] ?? '';
            $fano = $_REQUEST['tano'] ?? '';
            $fgen = $_REQUEST['tgen'] ?? '';

            if(empty($ftit)) {
                echo "<p>&#x274C; Você precisa preencher os dados.</p>";
            } else {
                $busca = "SELECT * FROM `filme` WHERE `titulo` = '$ftit'";

                $query = $conexao->prepare($busca);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                $total = $query->rowCount();

                if ($total > 0) {
                    echo "<p>&#x274C; Filme <strong>$ftit</strong> já foi cadastrado!</p>";
                } else {
                    $sql = "INSERT INTO `filme` (`titulo`, `ano`, `genero`) VALUES ('$ftit', '$fano', '$fgen')";
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
            }
        ?>
        <a href="cad-filme.php" class="botao">Voltar</a>
    </main>
</body>
</html>