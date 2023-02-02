<?php include '../backend/_dados_usuario.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../page/assets/img/Meu projeto.png" type="image/x-icon">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-header.css">
    <link rel="stylesheet" href="assets/css/style-anotacoes.css">
</head>

<body>
    <!-- Menu -->
    <?php include '../include/header.php' ?>

    <div class="container-anotacoes">
        <div class="lista-anotacoes">
            <div class="table-wrapper-scroll-y my-custom-scrollbar div">
                <h5>Lista da Categoria: </h5>
                <table class="table table-bordered table-striped mb-0 my-table">
                    <thead>
                        <tr>
                            <th scope="col">Título</th>
                            <th scope="col">Data de Publicação</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td style="color: white;">15 da aline</td>
                            <td style="color: white;">23-2-2020</td>
                            <td style="color: white;" class="text-center">
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-trash-fill"></i></button>
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>
                        <tr>

                            <td style="color: white;">Festa do joao</td>
                            <td style="color: white;">22-22-2222</td>
                            <td style="color: white;" class="text-center">
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-trash-fill"></i></button>
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>
                        <tr>

                            <td style="color: white;">Festa do kaua</td>
                            <td style="color: white;">11-11-1111</td>
                            <td style="color: white;" class="text-center">
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-trash-fill"></i></button>
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>
                        <tr>

                            <td style="color: white;">Churras</td>
                            <td style="color: white;">03-09-2004</td>
                            <td style="color: white;" class="text-center">
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-trash-fill"></i></button>
                                <button type="submit" class="btn btn-deletar"><i class="bi bi-pencil-square"></i></button>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
            
        </div>
        <div class="categorias">
                <h5>Categorias</h5>
                <div id="bloco-categoria">

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
        <script src="assets/js/script-categorias.js"></script>
        <script src="assets/js/script-listarCategorias.js"></script>
</body>
</body>

</html>