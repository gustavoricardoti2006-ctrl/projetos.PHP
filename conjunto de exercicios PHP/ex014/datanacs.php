<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>idade</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     <?php

     $va1 = date("Y");
     $vb2= $_GET['nasc']?? 0;
     $resp = $va1 - $vb2;
    
     ?>
     <main>
          <h1>idade</h1>
          <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

          <label for="nasc" >ano em que a pessoa nasceu</label>
          <input type="number" name ="nasc" id = "nasc" value="<?=$vb2?>">

          <input type="submit" value="verificar a idade">

          </form>
          <section>
               <?php
               if($resp < 18){
                    echo "fulana tem $resp anos de idade ou seja, é de menor";
               }
               else {
                    echo " fulana tem $resp anos de idade ou seja, é de maior";
               }
               
               
               ?>
          </section>
         
     </main>

     
</body>
</html>