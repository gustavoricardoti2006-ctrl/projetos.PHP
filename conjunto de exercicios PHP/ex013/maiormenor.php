<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>maior e menor</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     <?php
     $n1 = $_GET['v1'] ?? 0 ;
     $n2 = $_GET['v2'] ?? 0 ;
     ?>
     <main>
          <h1>Maior Valor</h1>
          <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
               <label for="v1">valor 1</label>
               <input type="number" name="v1" id="v1" value="<?=$n1?>">
               <label for="v2">valor 2</label>
               <input type="number" name="v2" id="v2" value="<?=$n2?>">
               <input type="submit" value="comparar">
          </form> 
          <section>
               <h2>Resultado</h2>

               <?php
               if( $n1 > $n2 ){
                    echo "<p> o valor $n1 é maior que $n2</p>";
               }
               elseif ( $n1 < $n2){
                    echo "<p>o valor $n1 é menor que $n2</p>";
               }
               else{
                    echo "ambos os números são iguais";
               }
               ?>

          </section>
     </main>
</body>
</html>