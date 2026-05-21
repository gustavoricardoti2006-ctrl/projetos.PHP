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
    $aluno= [
    "nome" => "amanda",
    "curso" => "informatica",
    "nota" => array(3.5,8,5)
];
    ?>
    <main>
        <h1>dados do aluno</h1>
        <?php
        echo"<li> O aluno se chama {$aluno['nome']}</li>";
        echo"<li> O aluno se chama {$aluno['curso']}</li>";
        echo"<li> O aluno se chama {$aluno['nota'][0]}</li>";
        echo"<li> O aluno se chama {$aluno['nota'][1]}</li>";
        echo"<li> O aluno se chama {$aluno['nota'][2]}</li>";
        ?>
    </main>
</body>
</html>