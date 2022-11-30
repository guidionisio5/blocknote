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

    <form class="container-escritor">

        <div class="escrita">
            <h5>Central do Escritor</h5>
            <textarea class="bloco-escrever img-fundo" id="img-bloco" onkeydown="tirarImg()" onchange="voltaImg()">

            </textarea>
            <h5>Descrição</h5>
            <textarea class="bloco-descricao img-descricao" id="txt-descricao" onkeydown="tirarTxt()" onchange="voltaTxt()">

            </textarea>
        </div>

        <div class="categorias">
            <h5>Categorias</h5>
            <div class="bloco-categoria">
                <div class="item-categoria">Escola</div>
                <div class="item-categoria">Livros</div>
                <div class="item-categoria">Treino</div>
                <div class="item-categoria">

                    <p class="adicionar mais">
                        +
                    </p>

                </div>

                <div class="item-categoria">

                    <p class="mais">
                        +
                    </p>

                </div>
                <div class="item-categoria">

                <small class="mais">
                        +
                </small>

                </div>
            </div>

        </div>


</form>










    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
    <script src="assets/js/script-img-central.js"></script>
</body>
</body>

</html>