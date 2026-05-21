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
        <?php 
            $r = $_REQUEST['ref'] ?? '';

            $busca = "SELECT * FROM `genero` WHERE `cod-genero` = '$r'";
            $query = $conexao->prepare($busca);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            $total = $query->rowCount();
            if ($total == 0) {
                echo "<p>&#x274C; Referência incorreta para a alteração de dados.</p>";
            } else {
                $tcod = $_REQUEST['tcodgen'] ?? '';
                $tgen = $_REQUEST['tgen'] ?? '';

                $sql = "UPDATE `genero` SET `cod-genero` = '$tcod', `genero` = '$tgen' WHERE `cod-genero` = '$r' LIMIT 1";

                $comando = $conexao->prepare($sql);
                try {
                    $conexao->beginTransaction();
                    $comando->execute();
                    $conexao->commit();
                    $afetados = $comando->rowCount();
                    if ($afetados >= 0) {
                        echo "<p>&#x2705; Alterado com sucesso.</p>";
                    } else {
                        echo "<p>&#x274C; Algo deu errado e nada foi alterado.</p>";
                    }
                }catch (Exception $e){
                    $conexao->rollback();
                    //throw $e;
                    echo "<p>&#x274C; Não foi possível alterar. Tente novamente mais tarde.</p>";
                }   
            }
        ?>
        <a href="cad-genero.php" class="botao">Voltar</a>
    </main>
</body>
</html>