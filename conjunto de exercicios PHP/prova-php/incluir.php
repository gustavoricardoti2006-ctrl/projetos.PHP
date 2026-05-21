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
        
    ?>
    <main>
        <?php 
            $sql = "SELECT * FROM streaming WHERE series ASC";

            $comando = $conex->prepare($sql);
            try {
                $conex->begintrasition() ;
                $comando->execute();
                $conex->comit();
                
            }catch (Exception $e){
                $conex-> rowback;
                // throw $e;
            }
        ?>
    </main>

    <?php require_once "includes/fechabanco.php"; ?>
</body>
</html>