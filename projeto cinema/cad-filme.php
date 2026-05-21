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
        <section class="listagem">
            <h1>Filmes Cadastrados</h1>
            <?php 
            $sql = "SELECT `filme`.*, `genero`.`genero` as `tipo` FROM `filme` INNER JOIN `genero` ON `filme`.`genero` = `genero`.`cod-genero` ORDER BY `titulo` ASC";
            $query = $conexao->prepare($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            $total = $query->rowCount();

            if ($total == 0) {
                echo "<p>&#x274C; Nenhum filme cadastrado</p>";
            } else { ?>
            <table>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Ano</th>
                    <th>Gênero</th>
                    <th>&#x2699;</th>
                </tr>
                <?php while ($dados = $query->fetch()) {?>
                    <tr>
                        <td><?=$dados['cod-filme']?></td>
                        <td><?=$dados['titulo']?></td>
                        <td><?=$dados['ano']?></td>
                        <td><?=$dados['tipo']?></td>
                        <td>
                            <a href="cad-filme-edit.php?ref=<?=$dados['cod-filme']?>">&#x2710;</a>

                            <a href="cad-filme-delete.php?ref=<?=$dados['cod-filme']?>" onclick="return confirm(`Quer mesmo apagar <?=$dados['titulo']?>?`)">&#x1F5D1;</a>
                        </td>
                    </tr>
                <?php } // Fim while ($dados = $query->fetch()... ?>
            </table>
            <?php } // Fim if ($total == 0) ?>
        </section>

        <section class="menu">
            <ul>
                <li><a href="cad-filme-new.php">Novo Filme</a></li>
                <li><a href="cadastros.php">Voltar para cadastros</a></li>
            </ul>
        </section>
    </main>
</body>
</html>