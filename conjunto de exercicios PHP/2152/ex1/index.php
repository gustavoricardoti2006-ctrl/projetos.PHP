<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>
<body>
    <?php
    $aluno =  ["a"=> "Ana","b" => "Bruno","c"=>"Carlos","d" =>"Daniela"];
    
    
    ?>
    <main>

        <h1>teste de vetor</h1>

    </main>

    <pre>
        <?php
           // var_dump($aluno);

        $aluno ["e"] = "fabiano";
        unset($aluno ["c"]);

 foreach($aluno as $pos => $valor){
    echo"<p> O aluno $pos se chama $valor</p>";
 }
        ?>
    </pre>
</body>
</html>