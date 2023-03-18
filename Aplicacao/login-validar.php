<?php
$cli_cpf = $_POST['cli_cpf'];
$cli_senha = $_POST['cli_senha'];

include_once "conexao.php";

$cli_senha = md5($cli_senha);

$sqlSenha = "SELECT * FROM cad_cliente WHERE cli_cpf = '$cli_cpf' AND cli_senha = '$cli_senha'";

$dados = mysqli_query($conexao, $sqlSenha);


if($dados->num_rows > 0){

  while ($AcessoClientes = mysqli_fetch_assoc($dados)) {
    $cli_cpf = $AcessoClientes['cli_cpf'];
    $cli_nome = $AcessoClientes['cli_nome'];
    $cli_foto = $AcessoClientes['cli_foto'];
  }  

  //echo ($AcessoClientes);
  //exit();

    session_start();
    $_SESSION["cli_nome"] = $cli_nome;
    $_SESSION["cli_foto"] = $cli_foto;
    header("location:index.php");
}else{
    header("location:login.php?msg=mensagemUsuario");
}
?>