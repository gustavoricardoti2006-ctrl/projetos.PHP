<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Séries</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        require_once "includes/abrebanco.php"; 

        $nome = $_GET['nome']?? '';
        $stream = $_GET['stream']?? '';
        $temp = $_GET['temp']?? '';

    ?>
    <main>
        <?php 

        $ref = $_GET['ref']?? '';

            $sql = "INSERT INTO $tabela FROM codserie ASC";

            $comando = $conex->prepare($sql);
            try {
                $conex->beginTransaction();
                $comando->execute();
                $conex->commit();

            }
                
            catch (Exception $e){
                $conex->rollback();
                // throw $e;
            }

            echo "<p>$nome foi adicionado</p>";
            echo "<a href='index.php'>Voltar</a>"
            

        
        ?>
    </main>

    <?php require_once "includes/fechabanco.php"; ?>
</body>
</html>