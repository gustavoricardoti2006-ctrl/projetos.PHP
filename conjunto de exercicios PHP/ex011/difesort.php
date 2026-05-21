<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>diferça sorteio</title>
     <link rel="stylesheet" href="../style.css">


</head>
<body>
     <?php
      $n1 = $_GET ['vI1'] ?? 0;
      $n2 = $_GET ['vI2'] ?? 0;
      $resp = $n1 - $n2;
      $sort = rand($n1,$n2);
     ?>
   <main>
     <h1>diferença e Sorteio</h1>
          <form action="<?= $_SERVER['PHP_SELF']?>"method="get">
          <label for="vI1">Valor 1</label>
          <input type="number" name="vI1" id="vI1" value="<?= $n1?>">
          <label for="vI2">Valor 2</label>
          <input type="number" name="vI2" id="vI2"  value="<?= $n2?>"   >
          <input type="submit" value="diferenciar">
      
         </form>
   </main>

   <section>
      <?php
        echo " a diferença entre eles é $resp";
        echo " o numero sorteado foi $sort";
      ?>
     
   </section>
     
</body>
</html>