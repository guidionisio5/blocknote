<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar-se no BlockNote</title>

    <!-- Importação CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-secondary">

    <!-- INÍCIO CONTAINER -->
    <div class="container-fluid p-0 m-0">
    
        <?php include 'include/menu.php';?>
        
    </div>

    <div class="container-fluid container-center">
        <!-- INÍCIO CADASTRO USUÁRIO -->
        <div class="text-center">
            <h1 class="text-light">Cadastro de Usuário</h1>
        </div>

        <div>
            <form class="p-3 text-light" id="cadastro-usuarios" enctype="multipart/form-data">
                <div class="row justify-content-md-center">
                    <div class="col-2">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control bg-dark border-dark text-light" type="text" name="nome" id="nome">
                    </div>

                    <div class="col-2">
                        <label class="form-label" for="sobrenome">Sobrenome</label>
                        <input class="form-control bg-dark border-dark text-light" type="text" name="sobrenome" id="sobrenome">
                    </div>

                    <div class="col-2">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark text-light" type="mail" name="email" id="email">
                    </div>

                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <label class="form-label" for="nome">Senha</label>
                        <input class="form-control bg-dark border-dark text-light" type="password" name="senha" id="senha">
                    </div>

                    <div class="col-3">
                        <label class="form-label" for="confirmar_senha">Confirmar senha</label>
                        <input class="form-control bg-dark border-dark text-light" type="password" name="confirmar_senha" id="confirmar_senha">
                    </div>
                </div>
                
                <div class="text-center">
                    <a class="text-light " href="index.php">Voltar para login</a>
                </div>

                <div class="text-center">
                    <button class="btn btn-info text-light mt-2" type="button" onclick="cadastrarUsuarios()">Cadastrar</button>
                </div>
                
            </form>
        </div>
        <!-- FIM CADASTRO USUÁRIO -->
    </div>
    <!-- FIM CONTAINER -->

<?php include 'include/footer.php';?>    