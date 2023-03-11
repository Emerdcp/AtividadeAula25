<?php 
$msg = $_GET['msg'] ?? "";

if($msg == "usuarioInvalido"){
    echo "<div class='alert alert-info'>Usuário Invalido!</div>";
}
?>