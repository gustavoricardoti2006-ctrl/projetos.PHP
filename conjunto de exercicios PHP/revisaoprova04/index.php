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
     <?php 
    $pessoas = array(
          1=> array("nome" => "fernanda", "idade" =>  15,  "salario"=>7000),
          2=> array("nome" => "Rafaela",  "idade" =>16,  "salario"=> 13200),
          3=> array("nome" => "Will",     "idade" => 15,  "salario"=> 11900)
    )
     ?>
     <main>
          <h1>LIsta de nomes</h1>
        
          <table>
               <tr>
                    <th>num</th>
                    <th>nome</th>
                    <th>idade</th>
                    <th>salario</th>
               </tr>
          <?php 
          foreach($pessoas as $num => $gente){
          echo"<tr>";
          echo"<td>$num</td>";
          echo"<td>{$gente['nome']}</td>";
          echo"<td>{$gente['idade']}</td>";
          echo"<td>R$ ". number_format($gente['salario'], 2, ",", ".") ."</td>";
          echo"</tr>";
          }
          ?>
          </table>
     </main>
</body>
</html>