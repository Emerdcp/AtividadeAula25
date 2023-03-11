<?php

$cli_cpf = $_POST['cli_cpf'];
$cli_nome = $_POST['cli_nome'];
$cli_endereco = $_POST['cli_endereco'];
$cli_numero = $_POST['cli_numero'];
$cli_bairro = $_POST['cli_bairro'];
$cli_cidade = $_POST['cli_cidade'];
$cli_estado = $_POST['cli_estado'];
$cli_email = $_POST['cli_email'];
$cli_telefone = $_POST['cli_telefone'];
$cli_senha = $_POST['cli_senha'];

include_once "conexao.php";

$cli_senha = md5($cli_senha);

$sqlGravarCli = "insert into cad_cliente(cli_cpf, cli_nome, cli_endereco, cli_numero, cli_bairro, cli_cidade, cli_estado, cli_email, cli_telefone, cli_senha) 
                values ($cli_cpf, '$cli_nome', '$cli_endereco', $cli_numero, '$cli_bairro', '$cli_cidade', '$cli_estado', '$cli_email', $cli_telefone, $cli_senha)";

//echo ($sqlGravarCli);
//exit();

mysqli_query($conexao, $sqlGravarCli);

mysqli_close($conexao);

header("location: cad_cliente.php?msg=cadastro");

?>


