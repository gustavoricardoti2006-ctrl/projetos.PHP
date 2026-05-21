<header>
<?php 
if(isset($_SESSION['logado']) && $_SESSION['logado'] == true ){
    echo"<p>usuario<strong>{$_SESSION['usuario']}</strong> esta logado no momento
    <a href='logout.php'>Faça logout</a></p>";
    
}else{

        echo"<p>Nenhum usuário logado. <a href='login.php'>Faça login
        </a>.</p>";
}
    ?>
</header> 