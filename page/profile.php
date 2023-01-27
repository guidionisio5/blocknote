<?php 
    include '../backend/_dados_usuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="assets/img/icone.png" type="image/x-icon">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-header.css">
    <link rel="stylesheet" href="assets/css/style-profile.css">
</head>

<body>
    <?php 
    include '../include/header.php';
    ?> 
        
        <div class="grid">
            
                <form action="" class="form-grid" id="form-profile" method="POST" enctype="multipart/form-data">
                    <div class="">
                        <h3>Informações do usuário</h3>
                    </div>
                    <div class="grid-center" id="profile">
                        
                    </div>
                    
                    <div id="descricao">
                        
                    </div>
                    
                </form>
                
        

            <div class="profile-img">
                <div class="img-grid">
                    <div>
                        
                    </div>
                    <div class="">
                        <h5 class="h5">Gestão de Usuário</h5>
                    </div>
                    <div id="img-profile">
                        
                    </div>
                    <br>
                
                
                    <div class="btn-div">
                        <button class="btn-profile" type="button" onclick="updateProfile()">SALVAR MUDANÇAS</button>
                    </div>

                </div>
            </div>
        </div>
    

    </div>



    <!-- Importação do JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
    <!-- Importação JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="assets/js/script-profile.js"></script>

    <!-- Importação JS - SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- importação inputmask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
        integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>