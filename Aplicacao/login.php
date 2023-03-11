<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <?php include "conexao.php";?>

    <main class="container">
        <div class="row w-50 ms-auto me-auto vh-100">
            <div class="col align-self-center">
                <form action="login-validar.php" method="post">
                    <div class="row">
                        <div class="col text-center mt-3">
                        <hr>
                            <h1>Usuário</h1>
                            <input id="cli_cpf" class="form-control" placeholder="Digite seu CFP" name="cli_cpf" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center mt-3">
                             <input type="password" id="cli_senha" class="form-control" placeholder="Senha" name="cli_senha" required>
                        </div>
                    </div>
                        <div class="col text-center mt-3">
                            <button type="submit" class="btn btn-dark ms-2">Entrar</button><i class="bi bi-person-fill-lock"></i>
                        </div>
                        <hr>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>


