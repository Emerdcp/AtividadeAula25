<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="shortcut icon" href="Logos\luz.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>


<?php include_once "sessao_login.php"?>

    <main class="conteiner">
        <div class="row justify-content-center borda">
            <div class="col-md-12 col-lg-10">
                <div class="row">

                <?php include_once "menu.php";?>

                    <div class="cal-md-6 text-center mb-5">
                        <h1>Cadastro de Produtos</h1>
                    </div>
                    <hr>

                    <?php include_once "mensagemProduto.php";?>
                    
                    <div class="row justify-content-center borda">
                        <div class="cal-md-12 col-lg-10">
                            <div class="row align-items-center">

                            <form action="cad_produtos-inserir.php" method="post">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="form-group mb-3">
                                            <label class="label">Nome Produto</label>
                                            <input placeholder="Nome Produto" name="prod_nome" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group mb-3">
                                            <label class="label">Categoria do Produto</label>
                                            <input placeholder="Categoria do Produto" name="prod_categoria" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Quantidade</label>
                                            <input placeholder="" name="prod_quant" class="form-control" type="number" min="0">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Preço de compra</label>
                                            <input placeholder="" name="prod_precocompra" class="form-control" id="preco-compra">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Preço de venda</label>
                                            <input placeholder="" name="prod_precovenda" class="form-control" id="preco-venda">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div  class="form-group mb-3">
                                            <button type="submit" class="btn btn-dark ms-2"> Cadastrar</button>
                                        </div>    
                                    </div>                   
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="jquery.js"></script>
    <script src="jquery.inputmask.js"></script>
    <!-- <script src="jquery.mask.js"></script> -->
    <script src="valor.js"></script>
</body>
</html>