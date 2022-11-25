<?php include '../backend/_dados_usuario.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-header.css">
    <link rel="stylesheet" href="assets/css/style-page-principal.css">
</head>

<body>
    <?php include '../backend/include/header.php' ?>

    <div class="container-page position-absolute top-50 start-50 translate-middle">

        <div>
            <button type="button" onclick="sairUser()">Sair</button>
            <h5>Anotações Recentes</h5>


            <div class="linha">
                <a href="" class="blocos">Capa de Proteção</a>
                <a href="" class="blocos">Capa de Proteção</a>
                <a href="central-escritor.php" class="blocos">

                    <p class="adicionar mais">
                        +
                    </p>
                </a>
            </div>
        </div>

        <div>
            <h5>Favoritos</h5>
            <div class="linha">
                <a href="" class="blocos">Capa de Proteção</a>
                <a href="" class="blocos">Capa de Proteção</a>
                <a href="central-escritor.php" class="blocos">

                    <p class="adicionar mais">
                        +
                    </p>
                </a>
            </div>
        </div>

    </div>

    <!-- Importação do JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
    <!-- Importação JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
    <!-- Importação JS - SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    <!-- Importação JS da página -->
    <script src="assets/js/script-logout.js"></script>
    <script src="assets/js/script-img-central.js"></script>
</body>
</body>

</html>