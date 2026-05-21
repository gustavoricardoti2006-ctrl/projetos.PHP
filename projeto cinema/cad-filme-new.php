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
        <p>Cadastre um novo filme, incluindo o seu título, ano de lançamento e gênero nos campos abaixo. </p>
        <section class="form">
            <form action="cad-filme-new-save.php" method="get">
                <label for="ttit">Título</label>
                <input type="text" name="ttit" id="ttit" size="30" required>
                <label for="tano">Ano</label>
                <input type="number" name="tano" id="tano" min="1900" max="3000" required>
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
                            while ($dados = $query->fetch()) {
                                echo "<option value='{$dados['cod-genero']}'>{$dados['genero']}</option>";
                            }
                        }
                    ?>
                </select>
                <input type="submit" value="Incluir">
            </form>
            <a href="cad-filme.php" class="botao">Voltar</a>
        </section>
    </main>
</body>
</html>