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
            <h1>Gêneros cadastrados</h1>
            <?php 
            $sql = "SELECT * FROM `genero` ORDER BY `genero` ASC";
            $query = $conexao->prepare($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            $total = $query->rowCount();

            if ($total == 0) {
                echo "<p>&#x274C; Nenhum gênero cadastrado</p>";
            } else { ?>
            <table>
                <tr>
                    <th>Código</th>
                    <th>Gênero</th>
                    <th>&#x2699;</th>
                </tr>
                <?php while ($dados = $query->fetch()) {?>
                    <tr>
                        <td><?=$dados['cod-genero']?></td>
                        <td><?=$dados['genero']?></td>
                        <td>
                            <a href="cad-genero-edit.php?ref=<?=$dados['cod-genero']?>">&#x2710;</a>

                            <a href="cad-genero-delete.php?ref=<?=$dados['cod-genero']?>" onclick="return confirm(`Quer mesmo apagar <?=$dados['genero']?>?`)">&#x1F5D1;</a>
                        </td>
                    </tr>
                <?php } // Fim while ($dados = $query->fetch()... ?>
            </table>
            <?php } // Fim if ($total == 0) ?>
        </section>

        <section class="menu">
            <ul>
                <li><a href="cad-genero-new.php">Novo Gênero</a></li>
                <li><a href="cadastros.php">Voltar para cadastros</a></li>
            </ul>
        </section>
    </main>
</body>
</html>