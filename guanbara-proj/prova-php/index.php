<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Séries</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
       require_once "includes/abrebanco.php"; 

        $sql = "SELECT * FROM series ORDER BY nome ASC";
        echo $sql;
        $busca = $conex->prepare($sql);
        $busca->setFetchMode(PDO::FETCH_ASSOC);

        $busca->execute();
        $afetados = $busca->rowCount();
        
    ?>
    <main>
        <h1>Cadastro de Séries</h1>
        <table>
            <tr>
                <th>Cod</th>
                <th>Série</th>
                <th>Streaming</th>
                <th>Temp</th>
            </tr>
           
        </table>
    <?php
    while($dados = $busca->fetch()){
        echo "<table>";
        echo "<tr>";
        echo "<td>{$dados['codserie']}</td>";
        echo "<td>{$dados['nome']}</td>";
        echo "<td>{$dados['streaming']}</td>";
        echo "<td>{$dados['temporadas']}</td>";
        echo "</tr>";
        echo "</table>";
    }
    echo "<br>";
    echo "$afetados séries encontradas";
    ?>
        
    </main>


    <section>
        <h2>Incluir nova série</h2>

        <form action="incluir.php">
        <label for="nome">Nome da Série</label>
        <input type="text" name="nome" id="nome">

        <label for="stream">Serviço de Streaming</label>
        <select name="stream" id="stream">
        <option value="apple">apple tv</option>
        <option value="disney">Disney plus</option>
        <option value="hbo">HBO Max</option>
        <option value="netflix">Netflix</option>
        </select>

        <label for="temp">total de temporadas</label>
        <input type="number" name="temp" id="temp" max= '10' min = '1'>

        <input type="submit" value="incluir nova serie">
        </form>
        
    </section>

    <?php 
        require_once "includes/fechabanco.php";
    ?>
</body>
</html>