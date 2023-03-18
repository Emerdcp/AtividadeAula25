<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="shortcut icon" href="Logos\luz.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<?php include_once "sessao_login.php"?>

<main class="conteiner">
        <div class="row justify-content-center borda">
            <div class="col-md-12 col-lg-10">
                <div class="row">

                <?php include_once "menu.php";?>

                    <div class="cal-md-6 text-center mb-5">
                        <h1>Bem vindo</h1>
                        <hr>
                        <img  src="imagem/EkePreto.png" />
                    </div>
                    <hr>

                                        
                    <div class="row justify-content-center borda">
                        <div class="cal-md-12 col-lg-10">
                            <div class="row align-items-center">

                            <form>

                            <div class="card">
                                <div class="card-body p-5">
                                    <ul class="list-group mb-0">
                                        
                                        <?php
                                        include "conexao.php";
                                                                            
                                        $sqlBuscaClientes = "SELECT * FROM cad_cliente";
                                        
                                        $todasClientes = mysqli_query($conexao, $sqlBuscaClientes);
                                        while ($clientes = mysqli_fetch_assoc($todasClientes)) {
                                        ?>
                                        <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                                            <div class="col-3"> CPF: 
                                                <?php echo $clientes['cli_cpf']; ?>
                                            </div>
                                            <div class="col-5"> Nome: 
                                                <?php echo $clientes['cli_nome']; ?>
                                            </div>
                                            <div class="col-4"> E-mail: 
                                                <?php echo $clientes['cli_email']; ?>
                                            </div>
                                        </li>

                                        <?php
                                            }
                                            mysqli_close($conexao);
                                        ?>
                                    </ul>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
</html>