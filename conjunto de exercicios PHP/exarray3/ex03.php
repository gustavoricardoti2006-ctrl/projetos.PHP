<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
     
<?php 
     $aluno = array(
          "Nome" => "Will",
          "Curso" => "Informática",
          "Nota" => array(3.5,8,5)
          
     );
?>
       <main>
          <h1>teste de Vetor </h1>

          <?php 
          echo" <li> O aluno se chama {$aluno['Nome']}</li>";
          echo" <li>Faz o curso de {$aluno['Curso']}</li>";
          echo" <li>Sua primeira nota foi {$aluno['Nota'][0]}</li>";
          echo" <li>Sua segunda nota foi {$aluno['Nota'][1]}</li>";
          echo" <li>Sua terceira nota foi {$aluno['Nota'][2]}</li>";
          ?>
       </main>
</body>
</html>