<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <input type="number" name="ano" id="ano">
    <input type="submit" value="calcular">
    </form>

    </main>

    <?php

$anoAtual = date("Y");


$anoNascimento = $_POST["ano"]; 


$idade = $anoAtual - $anoNascimento;


if ($idade < 16) {
    echo "Você ainda não pode votar!";
} elseif ($idade >= 18 && $idade <= 70) {
    echo "Você deve votar nas próximas eleições!";
} else {
    echo "Seu voto é opcional nas próximas eleições.";
}
?>

</body>
</html>