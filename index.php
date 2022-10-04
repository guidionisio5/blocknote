<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar no BlockNote</title>

    <!-- Importação CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Importação Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="bg-secondary">

    <!-- INÍCIO CONTAINER -->
    <div class="container-fluid p-0 m-0">
        
        <?php include 'include/menu.php';?>
        
    </div>
    
    <!-- INÍCIO LOGIN USUÁRIO -->
    <div class="container-fluid p-0 m-0">
        <div class="text-center">
            <h1 class="text-light">Bem vindo de volta!</h1>
        </div>

        <div>
            <form class="p-3 text-light" id="login-usuarios">
                <div class="row justify-content-md-center">
                    <div class="col-4 text-center">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark text-light" type="mail" name="email" id="email">
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-2">
                        <label class="form-label" for="senha">Senha</label>
                        <input class="form-control bg-dark border-dark text-light" type="password" name="senha" id="senha">
                    </div>

                    <div class="col-2">
                        <label class="form-label" for="confirmar_senha">Confirmar Senha</label>
                        <input class="form-control bg-dark border-dark text-light" type="password" name="confirmar_senha" id="confirmar_senha">
                    </div>
                </div>
                
                <div class="text-center">
                    <a class="text-light " href="">Esqueci a senha</a>
                </div>

                <div class="text-center">
                    <button class="btn btn-info text-light mt-2" type="button" onclick="loginUsuarios()">Entrar</button>
                </div>
                
            </form>
        </div>
        <!-- FIM CADASTRO USUÁRIO -->
    </div>
    <!-- FIM CONTAINER -->

<?php include 'include/footer.php';?>   