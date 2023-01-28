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
    <link rel="stylesheet" href="assets/css/central-escritor.css">
</head>

<body>
    <?php include '../include/header.php' ?>

    <form id="salvarAnotacoes" class="container-escritor" method="post">

        <div class="escrita">
            <h5>Central do Escritor</h5>
                <textarea id="anotacoes" name="anotacoes" class="bloco-escrever img-fundo" onkeydown="tirarImg()" onchange="voltaImg()"></textarea>
            <h5>Descrição</h5>
                <textarea class="bloco-descricao img-descricao" name="descricao" id="descricao" onkeydown="tirarTxt()" onchange="voltaTxt()"></textarea>
            <div class="mt-3 mb-3">
                <button type="button" class="btn-salvar" onclick="abreModalSalvar()"">Salvar</button>
            </div>
        </div>

        <div class="categorias">
            <h5>Categorias</h5>
            <div id="bloco-categoria">
                
            </div>

        </div>


    </form>
</div>


    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="modal-cor">
            <div class="modal-header">
                <h1 class="modal-title fs-5 texto-menu" id="exampleModalLabel">Nova categoria!</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-categoria">
                    <div class="mb-3">
                        <label for="categorias" class="col-form-label texto-menu">Nome da categoria:</label>
                        <input type="text" class="form-control input-cor" name="categorias" id="categorias">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="novaCategoria()">Salvar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- fim do modal -->

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="modal-cor">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 texto-menu" id="exampleModalLabel">Nova categoria!</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-anotacoes" method="POST">
                        <div class="mb-3">
                            <label for="titulo" class="col-form-label texto-menu">Título:</label>
                            <input type="text" class="form-control input-cor texto-menu" name="titulo" id="titulo">
                        </div>
                        <div class="mb-3">
                            <label for="categorias" class="col-form-label texto-menu">Categoria:</label>
                            <select class="form-select input-cor texto-menu" aria-label="Default select example" id="option-categoria">
                                
                                
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="salvarAnotacoes()">Salvar</button>
                </div>
            </div>
        </div>
    </div>
   <!-- fim do modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src = "assets/js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script-img-central.js"></script>
    <script src="assets/js/script-salvarAnotacoes.js"></script>
    <script src="assets/js/script-centralEscritor.js"></script>
    <script src="assets/js/script-categorias.js"></script>
   
    
    <script>

    $(document).ready(function() {
            tinymce.init({
                selector: '#anotacoes',
                mode: "specific_textareas",
                editor_selector: "mceEditor",
                height: 400,
                width: 800,
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                plugins: 'preview importcss searchreplace autolink autosave save direcionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking âncora insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                language: 'portuguese' 
            });

            tinymce.init({
                selector: '#descricao', 
                mode: "specific_textareas",
                editor_selector: "mceEditor",
                height: 400,
                width: 800,
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                plugins: 'preview importcss searchreplace autolink autosave save direcionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking âncora insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                language: 'portuguese'
            });
    });
       
        
    </script>
</body>
</body>

</html>