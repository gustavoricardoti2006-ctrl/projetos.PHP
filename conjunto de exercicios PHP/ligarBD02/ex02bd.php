<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ligar banco de dados</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    $banco = "empresa";
    $tabela = "funcionario";
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conex = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

    $sql = " SELECT * FROM $tabela WHERE nome LIKE '%Santos%' ORDER BY nome DESC";

    $busca = $conex->prepare($sql);
    $busca ->setFetchMode(PDO::FETCH_ASSOC);
    $busca ->execute();

    ?>
<main>
    
        <table>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Setor</th>
                <th>Salário</th>
                <th>idade</th>
    
            </tr>
            <?php
            while ($dados = $busca->fetch()){
                echo "<tr>";
                echo "<td>{$dados['cod']}</td>";
                echo "<td>{$dados['nome']}</td>";
                echo "<td>{$dados['setor']}</td>";
                echo "<td>{$dados['salário']}</td>";
                echo "<td>{$dados['idade']}</td>";
                echo "</tr>";
    
            }
            $busca = null;
            $conex = null;
    
            ?>
        </table>

</main>
</body>
</html>