<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php 
require_once "includes/apenas-logado.php";
require_once "includes/cabecalho.php";
 ?>
    <main>
        <h1>Cadastro de usuário</h1>

        <img src="imagens/new-user.png" alt="Novo usuário" class="direita">
        
        <form action="usuario-inclui.php" method="post" onsubmit="event.preventDefault();validacao()">
            <div>
                <label for="flogin">Login </label>
                <input type="text" name="flogin" id="flogin" minlength="8" maxlength="20" required>
            </div>
            <div>
                <label for="fsen1">Senha </label>
                <input type="password" name="fsen1" id="fsen1" minlength="6" maxlength="20" required>
            </div>
            <div>
                <label for="fsen2">Confirme a senha </label>
                <input type="password" name="fsen2" id="fsen2" minlength="6" maxlength="20" required>
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>

        <p>&#x1F448; <a href="index.php">Voltar</a></p>
    </main>
    <script>
        function validacao(){
            let regex = /^[a-zA-Z0-9]+$/;
            let resp = flogin.value.match(regex);
            if(resp == null){
                alert('use apenas letras e numeros no nome do usuario')
                flogin.focus();
            }
            else if(fsen1.value !== fsen2.value){
                alert('as senhas devem ser iguais.');
            }
            else{
                event.currentTarget.submit()
            }
        }
    </script>
</body>
</html>