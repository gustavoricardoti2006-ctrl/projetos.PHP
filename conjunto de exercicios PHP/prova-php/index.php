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
       

        $sql = "SELECT * FROM series";
        
        $busca = $conex->prepare($sql);
        $busca->setFetchMode(PDO::FETCH_ASSOC);
        $busca-> execute();
        
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


           <?php
         while($dados = $busca->fetch()){
           echo"<tr>";
           echo"<td>{$dados['codserie']}</td>";
           echo"<td>{$dados['nome']}</td>";
           echo"<td>{$dados['streaming']}</td>";
           echo"<td>{$dados['temp']}</td>";
           echo"</tr>";
            }
           ?>
        </table>  
    </main>

    <section>
        <h2>Incluir nova série</h2>
        <form method="post">
         <label for="name">nome</label>
         <input type="text">
         <label for="serviços">serviços</label>
         <select name="serv" id="serv">
         <option value="netflix">Netflix</option>
         <option value="hbo">HBO</option>
         <option value="amazon">Amazon</option>
         </select>
         <label for="temporadas">Temporadas</label>
         <input type="number" name="temp" id="temp" >
         <input type="submit" value="enviar">

        </form>
    </section>

    <?php 
        require_once "includes/fechabanco.php";
    ?>
</body>

</html>