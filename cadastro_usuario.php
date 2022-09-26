<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar-se no BlockNote</title>

    <!-- Importação CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- CSS da página -->
    <link rel="stylesheet" href="css/cadastrar.css">

</head>

<body class="bg-secondary">
    <!-- INÍCIO CONTAINER -->
    <div class="container-fluid p-0 m-0">

        <!-- INÍCIO MENU -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">BlockNote</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end navbar-dark bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Opções</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body text-end">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Suporte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- FIM MENU -->
    </div>

    <div class="container-fluid container-center">
        <!-- INÍCIO CADASTRO USUÁRIO -->
        <div class="text-center">
            <h1 class="text-light">Cadastro de Usuário</h1>
        </div>

        <div>
            <form class="p-3 text-light" action="_cadastrar_usuario.php">
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control bg-dark border-dark" type="text" name="nome" id="nome">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark" type="mail" name="email" id="email">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Data de Nascimento</label>
                        <input class="form-control bg-dark border-dark" type="text" name="nascimento" id="nascimento">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">CPF</label>
                        <input class="form-control bg-dark border-dark" type="text" name="cpf" id="cpf">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Telefone</label>
                        <input class="form-control bg-dark border-dark" type="text" name="telefone" id="telefone">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">Imagem</label>
                        <input class="form-control bg-dark border-dark" type="file" name="imagem" id="imagem">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Senha</label>
                        <input class="form-control bg-dark border-dark" type="password" name="senha" id="senha">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">Confirmar senha</label>
                        <input class="form-control bg-dark border-dark" type="text" name="confirmar_senha" id="confirmar_senha">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-info text-light mt-2" type="submit">Cadastrar</button>
                </div>
                <div class="text-center">
                    <a class="text-light " href="index.php">Voltar para login</a>
                </div>
            </form>
        </div>
        <!-- FIM CADASTRO USUÁRIO -->
    </div>
    <!-- FIM CONTAINER -->

    <!-- Importação JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>