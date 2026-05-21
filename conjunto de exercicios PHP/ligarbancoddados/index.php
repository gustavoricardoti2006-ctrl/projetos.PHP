<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php 
     $servidor = 'localhost';
     $banco = 'faetecjv02';
     $usuario = 'root';
     $senha = '';
     $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario,$senha);


     ?>
     <main>
          <h1>Acessando Banco de Dados</h1>
          <pre>
               <?php
               $busca = $conexao->prepare("SELECT * FROM pessoas");
               $busca->setFetchMode(PDO::FETCH_ASSOC);
               $busca->execute();
               $dados = $busca->fetchAll();

               foreach($dados as $indice => $info){
                    echo"<p>A pessoa {$indice} se chama {$info['nome']} e mora em {$info['bairro']}/{$info['estado']}</p>";
               }
               // var_dump($dados);

               $conexao = null;
               
               ?>
          </pre>
     </main>
</body>
</html>