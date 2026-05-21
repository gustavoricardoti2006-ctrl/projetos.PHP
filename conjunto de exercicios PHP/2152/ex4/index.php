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
    $turma = [
        1 => array(
        "nome" => " carlos",
        "idade" => 15 ,
        "media" => 8),

        2 => array(
            "nome" => "rebeca",
            "idade" => 28,
            "media" => 7,5
        ),

        3=> array(
            "nome" => "roger",
            "idade" => 32,
            "media" => 10
        )
    ]
    ?>
    <main>
        <h1>listagem de Alunos</h1>
        <table>
            <tr>
                <th>num</th>
                <th>nome</th>
                <th>idade</th>
                <th>media</th>
        </tr>
            <?php
            foreach($turma as $num => $aluno){
                echo"<tr>";
                echo"<td>$num</td>";
                echo"<td>{$aluno['nome']}</td>";
                echo"<td>{$aluno['idade']}</td>";
                echo"<td>{$aluno['media']}</td>";
                echo"</tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>