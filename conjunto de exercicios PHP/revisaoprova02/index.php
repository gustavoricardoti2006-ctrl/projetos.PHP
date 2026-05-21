<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     <?php 
     $valor = $_GET['valor'] ?? '';
     ?>
     <main>
          <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
         <h1>tabuada</h1>
         <label for="valor">Quer ver a tabuada de qual número:</label>
         <input type="number" name="valor" id="valor">
         <input type="submit" value="calcular">
      </form>
     </main>

     <?php if(!empty($valor)){ ?>
     <section>
          <h2>resultado</h2>
          <?php 

          $valores = array();
          for($c = 1; $c <=10; $c++){
               $calc = $valor * $c;
               array_push($valores, $calc);
               echo"<p>$valor x $c = $calc</p>";

          }
          ?>
     </section>
     <?php } ?>
     
</body>
</html>