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
                $dados = $query->fetch();
        ?>
                <section class="form">
                    <form action="cad-genero-edit-save.php" method="get" onSubmit="if(!confirm('Confirma as alterações realizadas?')){return false;}">
                        <input type="hidden" name="ref" value="<?=$r?>">
                        <label for="tcodgen">Código</label>
                        <input type="number" name="tcodgen" id="tcodgen" value="<?=$dados['cod-genero']?>">

                        <label for="tgen">Gênero</label>
                        <input type="text" name="tgen" id="tgen" maxlength="20" value="<?=$dados['genero']?>">

                        <input type="submit" value="Alterar">
                    </form>
                </section>
            <?php } // Fim if ($total == 0) ?>
        <a href="cad-genero.php" class="botao">Voltar</a>
    </main>
</body>
</html>