<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $estado = [
    "AC" => "Acre",
    "BA" => "Bahia",
    "CE" => "Ceara", 
    "DF" => "Distrito Federal",
    "ES"=>"Espirito Santo",
    "RJ" => "Rio de Janeiro",
    "SP" => "São Paulo",
    "PA" => "Pará"
];
    ?>
    <main>
        <h1>Teste de vetores</h1>
        <form action="" method="get">
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
            <?php
            foreach($estado as $sigla => $valor){
                echo "<option value = '$sigla'> $valor </option>";
            }
            ?>
            </select>
        </form>
    </main>
</body>
</html>