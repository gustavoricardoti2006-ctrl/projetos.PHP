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

    $ano_atual = date("Y"); 

        $ano = $_POST["ano"]; 

    if ($ano < $ano_atual) {
  $diferenca = $ano_atual - $ano;
  echo "O ano informado já passou há $diferenca anos.";
} else if ($ano == $ano_atual) {
  echo "Estamos no ano atual.";
} else {
  $diferenca = $ano - $ano_atual;
  echo "Ainda faltam $diferenca anos para o ano informado.";
}

?>

</body>
</html>