<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Siglas</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     <?php 
        $vetor = array('RJ','MG','BA','SP')
     ?>
  
     <main>
          <form action="<?=$_SERVER['PHP_SELF']?>"method = "get">
          <?php 
          foreach($vetor as $indice => $resp){

               echo" <input type='radio' id='$indice'> -> ";
               echo "<label for='$indice'>$resp</label> <br>";
          }
          ?>
          <input type="submit" value="confirmar" nome="confirmar">
       </form>
     </main>
     
</body>
</html>