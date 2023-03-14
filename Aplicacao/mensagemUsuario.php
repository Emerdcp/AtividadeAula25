<?php 
$msg = $_GET['msg'] ?? "";

if($msg == "mensagemUsuario"){
    echo "<div class='alert alert-info'>Usuário ou Senha Invalido!</div>";
}
?>