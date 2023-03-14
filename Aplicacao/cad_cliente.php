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

<?php include_once "sessao_login.php"?>

<body>
    <main class="conteiner">
        <div class="row justify-content-center borda">
            <div class="col-md-12 col-lg-10">
            
            <?php include_once "menu.php";?>

                <div class="row">
                    <div class="cal-md-6 text-center mb-5">
                        <h1>Cadastro Clientes</h1>
                    </div>
                    <hr>
                    
                    <?php include_once "mensagemCadastro.php";?>
                    
                    <div class="row justify-content-center borda">
                        <div class="cal-md-12 col-lg-10">
                            <div class="row align-items-center">

                            <form action="cad_cliente-inserir.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group mb-3">
                                            <label class="label">CPF</label>
                                            <input placeholder="CPF" name="cli_cpf" class="form-control" maxlength="14" onkeyup="handleCpf(this)" required>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-group mb-3">
                                            <label class="label">Nome</label>
                                            <input placeholder="Nome" name="cli_nome" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="form-group mb-3">
                                            <label class="label">Endereço</label>
                                            <input placeholder="Endereço" name="cli_endereco" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group mb-3">
                                            <label class="label">Número</label>
                                            <input placeholder="Número" name="cli_numero" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Bairro</label>
                                            <input placeholder="Bairro" name="cli_bairro" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Cidade</label>
                                            <input placeholder="Cidade" name="cli_cidade" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Estado</label>
                                            <select name="cli_estado" class="form-select">
                                                <option value="São Paulo">São Paulo</option>
                                                <option value="Paraná">Paraná</option>
                                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                <option value="Santa Catarina">Santa Catarina</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form=group mb-3">
                                            <label class="label">E-mail</label>
                                            <input placeholder="e-mail" type="email" name="cli_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Telefone</label>
                                            <input type="tel" maxlength="14" name="cli_telefone" class="form-control" onkeyup="handlePhone(this)">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Senha</label>
                                            <input type="password" name="cli_senha" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div  class="form-group mb-3">
                                            <label class="label">Selecione o arquivo:</label>
                                            <input type="file" name="cli_foto" class="btn btn-dark ms-2" class="form-control"> 
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
    <script src="cpf.js"></script>
    <script src="telefone.js"></script>
</body>
</html>