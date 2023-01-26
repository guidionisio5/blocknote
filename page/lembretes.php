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
    <link rel="stylesheet" href="assets/css/style-lembretes.css">
</head>

<body>
    <!-- Menu -->
    <?php include '../include/header.php'?>

        <div class="container">
        
            <div>
                <div class="titulo">
                    <h5>Seus lembretes</h5>
                </div>
                <div class="linha" id="bloco-lembrete">
                 
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Lembrete!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-lembrete">
                    <div class="mb-3">
                        <label for="titulo" class="col-form-label">Título:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="data-lembrete" class="col-form-label">Data:</label>
                        <input type="date" class="form-control" name="data-lembrete" id="data-lembrete">
                    </div>
                
                    </div>
                    <div class="mb-3">
                        <label for="horario" class="col-form-label">Horário:</label>
                        <input type="time" class="form-control" name="horario" id="horario">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="novoLembrete()">Salvar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- fim do modal -->

    <!-- Importação do JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
    <!-- Importação JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
    <!-- Importação JS - SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    <!-- Importação JS da página -->
    <script src="assets/js/script-logout.js"></script>
    <script src="assets/js/script-img-central.js"></script>
    <script src="assets/js/script-lembretes.js"></script>
</body>
</body>

</html>