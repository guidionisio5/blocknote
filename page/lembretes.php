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
    <?php include '../include/header.php' ?>

    <div class="container-page position-absolute top-50 start-50 translate-middle">
<div>
    
    <div class="lembrete-padding">
       <h5 class="texto-lembretes">Seus lembretes</h5>
    </div>
        <div>
           
            


            <div class="linha">
                <a href="" class="blocos">
                    <li class="bolinha"></li>
                    <h3 class="desc">Churrasco</h3>
                    <h5 class="desc">13/12/2022</h5>
                    <p class="desc">19:30</p>
                    <img src="assets/img/check.png" alt="" class="check-img">
                  </a>
                
                
                <a href="" class="blocos">
                    <li class="bolinha"></li>
                    <h3 class="desc">Aniversário</h3>
                    <h5 class="desc">07/01/2023</h5>
                    <p class="desc">00:00</p>
                    <img src="assets/img/close.png" alt="" class="check-img">
                </a>

                <a href="central-escritor.php" class="blocos">
                    <li class="bolinha"></li>
                    <h3 class="desc">Prova</h3>
                    <h5 class="desc">10/12/2022</h5>
                    <p class="desc">13:30</p>
                </a>
            </div>
        </div>
       
        <br>
        

        <div>
            <div class="linha">
                <a href="" class="blocos">
                  <li class="bolinha"></li>
                  <h1></h1>
                  <h1></h1>
                  <h1></h1>
                </a>

                <a href="" class="blocos">
                  <li class="bolinha"></li>
                  <h1></h1>
                  <h1></h1>
                  <h1></h1>
                </a>

                <a href="central-escritor.php" class="blocos">
                  <li class="bolinha"></li>
                  <h1></h1>
                  <h1></h1>
                  <h1></h1>
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