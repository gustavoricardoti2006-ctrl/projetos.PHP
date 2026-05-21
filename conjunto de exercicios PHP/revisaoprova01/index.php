<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Revisão para prova</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     <?php 
       $num= $_GET['num'] ?? 0;
     ?>
     <main>
          <h1>leitor de números</h1>
          <form action="<?=$_SERVER['PHP_SELF']?>"method ="get">
          <label for="num">Digite um numero:</label><br>
          <input type="number" name="num" id="num">
         
     </form>
     </main>
    <section>

     <?php 
     for($c = 0; $c <= $num; $c++){
         if( $c % 5 == 0 ){
          echo "<mark >-$c</mark>";

      } else{
          echo"-$c";
      }
     }
     ?>
    </section>

</body>
</html>