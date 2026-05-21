<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    $nome = $_GET['nome']?? "";
    $sexo = $_GET['sexo']?? "";
    $salario = $_GET['salario']?? 0;
    $nsalariof = $_GET['nsalariof']?? 0;
    $nsalariom = $_GET['nsalariom']??0 ;
    ?>
    <main>
        <h1>verificar </h1>

        <fieldset>
           <form action="<?=$_SERVER['PHP_SELF']?>" method = "get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="sexo">sexo</label>

            <input type="radio" name = "masculino" id="masculino" value ="M">
            <label for="sexoM">Masculino</label>

            <input type="radio" name ="feminino" id="feminino" value = "f">
            <label for="sexoF">Feminino</label>

            <label for="salario">Salário</label>
            <input type="number" >
            <input type="submit" value="Novo salário" name="submit">

            </form>
        </fieldset>
        
    </main>

    <section>

        <?php
       
       if($sexo == "feminino"){
           $nsalariof = (float) $salario * 14/100 ;
           
           echo "$nome, seu novo salário e de $nsalariof"; }
           
           else{
             $nsalariom = (float) $salario * 10/100;

            echo " $nome, seu novo salário é de $nsalariom"; }
        
        ?>
    </section>

    
</body>
</html>