<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    require_once  "includes/abre-banco.php";
    $ref = $_REQUEST['ref'] ?? ''; 
    if(empty($ref)){ 
        echo"<p>&#x274C; Erro na chamada</p>";
    } else { 
        echo"<p>Usuário solicitou alteração de $ref.</p>";
        $sql = "SELECT * FROM veiculos WHERE renavam = '$ref' LIMIT 1";
        // echo $sql ; 

        $busca = $conex->prepare($sql); 
        $busca->setFetchMode(PDO::FETCH_ASSOC);
        $busca->execute(); 
        $total = $busca -> rowCount();

        if ($total <= 0){
        echo"<p>&#x274C; veiculo$ref não encontrado </p>";
        }
        else{
         $dados = $busca->fetch();
         ?>
         <form action="update.php" method="get" onsubmit="return confirm('Confirma as alterações no veículo')">
                <p>
                <input type="hidden" name="fre" value="<?=$ref?>">
            </p>
                <p><label for="fmod">Modelo</label>
                <input type="text" name="fmod" id="fmod" maxlength="30" value="<?=$dados['modelo']?>">
            </p>
                <p><label for="fma">Marca</label>
                <input type="text" name="fma" id="fma" maxlength="20" value="<?=$dados['marca']?>">
            </p>
                <p><label for="ffab">Fabricação</label>
                <input type="number" name="ffab" id="ffab" minlength="1991" value="<?=$dados['anofab']?>">
            </p>
                <p><label for="fcor">Cor</label>
                <input type="text" name="fcor" id="fcor" maxlength="15" value="<?=$dados['cor']?>">
            </p>
                <p><label for="fpre">Preço (R$)</label>
                <input type="number" name="fpre" id="fpre" step="0.01" value="<?=$dados['preco']?>">
            </p>
            <input type="submit" value="Alterar">
         </form>
         <?php
        }
     }   
     
     
    echo"<p><a href='index.php' class='btn'>Voltar</a></p>";
    require_once "includes/fecha-banco.php";
    
    ?>
</body>
</html>