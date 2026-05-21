<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $servidor = 'localhost';
    $banco = 'faetec';
    $usoario = 'root';
    $senha = '';
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco",$usoario, $senha);
   

    
    ?>
    <main>
        <h1>Acessando banco de dados</h1>
       <pre>

           <?php
           
           $busca = $conexao->prepare("SELECT * FROM pessoas");
           $busca->execute();
           $busca->setFetchMode(PDO::FETCH_ASSOC);
           $dados = $busca->fetchALL();
           var_dump($dados);
             foreach($dados as $indice => $info){
                echo"<p> A pessoa {$indice} se chama {$info['nome']} e mora em {$info['bairro']} / {$info['estado']}</p>";
             }
           $conexao = null;
           ?>
       </pre>
   
    </main>
</body>
</html>