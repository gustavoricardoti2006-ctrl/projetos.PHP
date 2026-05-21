<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=-, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     <?php 
     $alunos = array(1=>"ana","bruno","fernanda","carla",3.5);
     ?>
     <main>
          <h1>Teste de vetor</h1>
          <pre>
               <?php 
               $alunos[] = "fabio";
               // unset($alunos[3]);
               foreach($alunos as $pos => $valor){
                    echo" o aluno $pos se chama $valor <br>";
               }
               // var_dump($alunos);
               // for($pos = 1; $pos <= count($alunos); $pos++){
               //      echo "<p> O aluno $pos se chama $alunos[$pos]</p>";
               // }
               ?>
          </pre>
     </main>
     
</body>
</html>