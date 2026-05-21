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
     
    $turma = array(
            1 => array( "nome" => "pedro","media" =>"8.5","idade"=>"17"),
            2 => array( "nome" => "idade","media"),
            3 => array( "nome" => "idade", "media"),

    );
            
     ?>
     <main>
          <table>
               <tr>
                    <th>num</th>
                    <th>nome</th>
                    <th>media</th>
                    <th>idade</th>
               </tr>
          </table>
          <?php 
          foreach($turma as $num => $aluno){
          echo "<tr>";
          echo "<td>$num</td>";
          echo "<td>{$aluno['nome']}</td>";
          echo "<td>{$aluno['idade']}</td>";
          echo "<td>{$aluno['media']}</td>";
          echo "<tr>";
     }
          ?>
     </main>
     
</body>
</html>