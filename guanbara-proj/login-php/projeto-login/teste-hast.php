<?php
$senha = "cursoemvideo";

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo" para a senha $senha, temos o codigo $hash ";

// eteot2023 = $2y$10$Vlmk.oHzO4JojADXRo3yNe9hk4RojEoku34Ya.EjBkRNdkPT6KrB2 //
$teste = password_verify('gustav', '$2y$10$Vlmk.oHzO4JojADXRo3yNe9hk4RojEoku34Ya.EjBkRNdkPT6KrB2');
if($teste == true){
   echo"senha confere";
}
else{
    echo"senha não confere";
}
?>