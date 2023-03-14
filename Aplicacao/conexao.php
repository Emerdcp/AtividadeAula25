<?php 
$server = '127.0.0.1:3312';
//$server = '127.0.0.1';
$db = 'aplicacao';
$user = 'root';
$pass = '';

try{
    $conexao = mysqli_connect($server, $user, $pass, $db) or die("Falha na conexao".mysqli_connect_error());
}catch(Exception $e){
    echo "Erro na conexão: $e";
    exit();
}
?>

