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
    
    $preco = $_POST['num'];
    
    if($preco < 100){
        echo "desconto de 10%";
    }
    elseif($preco >= 100 && $preco <= 1000){
        echo "desconto de 15%";
    }
    else{
        echo "desconto de 18%";
    }

    ?>
</body>
</html>