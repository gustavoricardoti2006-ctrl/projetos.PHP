<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    $sexo = $_POST['sexo']??'M'; 
    $senha = $_POST['senha']??'';
    $vsenha = $_POST['vsenha']??'';
    $estado = $_POST['estado']??'RJ';
    $data = $_POST['data']??''; 
    ?>

    <main>

        <h1>CADASTRO</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method = "post">

            <fieldset>
                <legend>Sexo</legend>
                <input type="radio" name="sexo" id="sexoM" value="M"checked >
                <label for="sexoM">Masculino</label>
                <input type="radio" name="sexo" id="sexoF" value="F">
                <label for="sexoF">feminino</label>
            </fieldset>

            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha">

            <label for="vsenha">Verifique a senha</label>
            <input type="password" name="vsenha" id="vsenha">

            <label for="estado">Estado</label>
            <select name="estado" id="estado">

            <option value="RJ">Rio de Janeiro</option>
            <option value="SP">São Paulo</option>
            <option value="MG">Minas Gerais</option>
            <option value="ES">Espírito Santos</option>

            </select>
            <label for="data">dia do cadastro</label>
            <input type="date" name="data" id= "data">
            <input type="submit" value ="enviar">
        </form>
        
    </main>
    <section>
          <h2>Dados informados pelo usuário</h2>
          <?php

          echo"<ul>";
          echo "<li>sexo:$sexo</li>";
          echo "<li>senha:$senha</li>";
          echo "<li>senha verificada:$senha</li>";
          echo "<li>estado:$estado</li>";
          echo "<li>data:". date('d/M/Y', strtotime($data))."</li>";
          echo "</ul>";
         

          ?>

    </section>
</body>
</html>