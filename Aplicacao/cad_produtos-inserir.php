<?php

$prod_nome = $_POST['prod_nome'];
$prod_categoria = $_POST['prod_categoria'];
$prod_quant = $_POST['prod_quant'];
$prod_precocompra = $_POST['prod_precocompra'];
$prod_precovenda = $_POST['prod_precovenda'];

include_once "conexao.php";

$prod_precocompra = str_replace('.','',$prod_precocompra);
$prod_precocompra = str_replace(',','.',$prod_precocompra);

//echo ($prod_precocompra);
//exit();

//$prod_precovenda = str_replace([','],'.', $prod_precovenda);

$sqlGravarProd = "insert into cad_produtos(prod_nome, prod_categoria, prod_quant, prod_precocompra, prod_precovenda) 
                values ('$prod_nome', '$prod_categoria', $prod_quant, $prod_precocompra, $prod_precovenda)";

//echo ($sqlGravarProd);
//exit();

mysqli_query($conexao, $sqlGravarProd);

mysqli_close($conexao);

header("location: cad_produtos.php?msg=produto");

?>