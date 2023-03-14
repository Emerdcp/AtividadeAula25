<?php

$pastaCliente = "imagem";

$nomeArquivoCliente = $_FILES["cli_foto"]["name"];

$extensao = explode(".",$nomeArquivoCliente);
$nomeNovoCliente = round(microtime(true)) . "." . end($extensao);

move_uploaded_file($_FILES["cli_foto"]["tmp_name"],$pastaCliente . $nomeNovoCliente);

?>