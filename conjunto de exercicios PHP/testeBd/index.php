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
            1 => array("nome" => "Carlos",
                      "bairro" => "Nilópolis",
                      "sigla"=>"NL"),

            2 => array("nome" => "Jhulia",
                      "bairro" => "Rio de Janeiro",
                      "sigla"=>"RJ"),

            3 => array("nome" => "Pedro",
                       "bairro" => "Campo Grande",
                       "sigla"=>"CG"),

            4 => array("nome" => "João", 
                       "bairro" => "Anchieta",
                       "sigla"=>"AN"),
     );

     ?>
  <main>
          <table>
               <tr>
                 <th>num</th>
                 <th>Nome</th>
                 <th>Bairro</th>
                 <th>Sigla</th>
               </tr>
           <?php 
               foreach($pessoas as $num => $nome ){
               echo"<tr>";
               echo "<td>$num</td>";
               echo "<td>{$nome['nome']}</td>";
               echo "<td>{$nome['bairro']}</td>";
               echo "<td>{$nome['sigla']}</td>";
               echo"</tr>";
               }
            ?>
         </table>
 </main>
     
</body>
</html>