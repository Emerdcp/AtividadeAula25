<?php
$cli_cpf = $_POST['cli_cpf'];
$cli_senha = $_POST['cli_senha'];

include_once "conexao.php";

$cli_senha = md5($cli_senha);

$sqlSenha = "SELECT * FROM cad_cliente WHERE cli_cpf = '$cli_cpf' AND cli_senha = '$cli_senha'";

$dados = mysqli_query($conexao, $sqlSenha);


if($dados->num_rows > 0){
    session_start();
    $_SESSION["cli_cpf"] = $cli_cpf;
    header("location:index.php");
}else{
    header("location:login.php?msg=mensagemUsuario");
}
?>