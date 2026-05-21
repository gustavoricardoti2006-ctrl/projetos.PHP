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
     $estados = array(
          "RJ" => "Rio Janeiro",
          "MG" => "Minas Gerais",
          "SP" => "São Paulo",
          "MT" => "Mato Grosso do Sul",
          "BA" => "Bahia",
     );
?>
       <main>
          <h1>teste de Vetor </h1>

          <?php 
     
          foreach( $estados as $siglas => $nome){
               echo"<p>O estado do $nome tem a sigla $siglas</p>";
          }
          ?>
       </main>
</body>
</html>