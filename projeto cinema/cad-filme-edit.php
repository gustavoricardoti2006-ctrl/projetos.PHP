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

            $busca = "SELECT `filme`.*, `genero`.`genero` as `tipo` FROM `filme` INNER JOIN `genero` ON `filme`.`genero` = `genero`.`cod-genero` WHERE `filme`.`cod-filme` = '$r' ORDER BY `titulo` ASC";
            $query = $conexao->prepare($busca);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            $total = $query->rowCount();
            if ($total == 0) {
                echo "<p>&#x274C; Referência incorreta para a alteração de dados.</p>";
            } else {
                $dados = $query->fetch(); ?>
                <section class="form">
                    <form action="cad-filme-edit-save.php" method="get" onSubmit="if(!confirm('Confirma as alterações realizadas?')){return false;}">
                        <input type="hidden" name="ref" value="<?=$r?>">
                        <label for="tcod">Código</label>
                        <input type="number" name="tcod" id="tcod" required value='<?=$dados['cod-filme']?>'>
                        <label for="ttit">Título</label>
                        <input type="text" name="ttit" id="ttit" size="30" required value='<?=$dados['titulo']?>'>
                        <label for="tano">Ano</label>
                        <input type="number" name="tano" id="tano" min="1900" max="3000" required value="<?=$dados['ano']?>">
                        <label for="tgen">Gênero</label>
                        <select name="tgen" id="tgen">
                            <?php 
                            $sql = "SELECT * FROM `genero` ORDER BY `genero` ASC";
                            $query = $conexao->prepare($sql);
                            $query->setFetchMode(PDO::FETCH_ASSOC);
                            $query->execute();
                            $total = $query->rowCount(); 
                            if ($total == 0) {
                                echo "<option>ERRO! Cadastre gêneros</option>";
                            } else {
                                while ($generos = $query->fetch()) {
                                    $selecionado = '';
                                    if ($dados['genero'] == $generos['cod-genero']) {
                                        $selecionado = 'selected';
                                    }
                                    echo "<option value='{$generos['cod-genero']}' $selecionado>{$generos['genero']}</option>";
                                }
                            } ?>
                        </select>

                        <input type="submit" value="Alterar">
                    </form>
                </section>
            <?php } // Fim if ($total == 0) ?>
        <a href="cad-filme.php" class="botao">Voltar</a>
    </main>
</body>
</html>