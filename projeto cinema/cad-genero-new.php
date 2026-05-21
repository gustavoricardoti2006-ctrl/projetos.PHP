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
        <p>Cadastre um novo gênero, incluindo o seu nome no campo abaixo. Se quiser cadastrar mais de um gênero por vez, separe-os com vírgulas.</p>
        <section class="form">
            <form action="cad-genero-new-save.php" method="get">
                <label for="tgen">Gênero</label>
                <input type="text" name="tgen" id="tgen" size="30" required placeholder="Para múltiplos gêneros, use vírgulas">
                <input type="submit" value="Incluir">
            </form>
            <a href="cad-genero.php" class="botao">Voltar</a>
        </section>
    </main>
</body>
</html>