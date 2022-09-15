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

        <!-- INÍCIO MENU -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">BlockNote</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark text-bg-dark text-end p-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Suporte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- FIM MENU -->

        <!-- INÍCIO CADASTRO USUÁRIO -->
        <div class="text-center">
            <h1 class="text-light">Cadastro de Usuário</h1>
        </div>

        <div>
            <form class="p-3 text-light" action="">
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control bg-dark border-dark" type="text" name="nome" id="nome">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark" type="text" name="email" id="email">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control bg-dark border-dark" type="text" name="nome" id="nome">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark" type="text" name="email" id="email">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control bg-dark border-dark" type="text" name="nome" id="nome">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark" type="text" name="email" id="email">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control bg-dark border-dark" type="text" name="nome" id="nome">
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="email">E-Mail</label>
                        <input class="form-control bg-dark border-dark" type="text" name="email" id="email">
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