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
    <input type="number" name="num" id="num">
    
    <input type="submit" value="calcular">
    </form>

    </main>

    <?php

    $numero = $_POST['num'];

        if ($numero % 2 == 0) {
  echo "O número é par.";
    } else {
  echo "O número é ímpar.";
}

?>

</body>
</html>