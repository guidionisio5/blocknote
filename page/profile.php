<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icone.png" type="image/x-icon">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-header.css">
    <link rel="stylesheet" href="assets/css/style-profile.css">
</head>

<body>
     <?php include '../include/header.php' ?> 

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <form action="" class="form-grid">
                    <div class="row">
                    
                        <h3>Informações do usuário</h3>
                    </div>
                    <div class="row grid-center">
                        <div class="">
                            <div class="">
                                <label for="nome">Nome do usuário</label>
                                <input class="input-grid" type="text" name="nome" id="nome">
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <label for="emnail">Email do usuário</label>
                                <input class="input-grid" type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <label for="senha">Trocar senha</label>
                                <input class="input-grid" type="password" name="senha" id="senha">
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <label for="imagem">Selecionar foto de perfil  </label> 
                                <input class="input-grid" type="file" name="imagem" id="imagem" class="input-img">
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <label for="localizacao">Localização</label>
                                <input class="input-grid" type="text" name="localizacao" id="localizacao">
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <label for="tel">Telefone</label>
                                <input class="input-grid" type="text" name="tel" id="tel">
                            </div>
                        </div>
                    </div>
                   

                    
                    <div class="">
                            <div class="">
                                <h5>Descrição do Usuário</h5>
                                <textarea class="desc-grid" name="desc" id="desc" placeholder="lindo,gostoso,sedutor e solteiro"></textarea>
                            </div>
                        </div>
                    
                </form>
                
            </div>  
        

            <div class="col-lg-2 profile-img">
                <div class="img-grid">
                    <div class="">
                        <h5 class="h5"><i class="far fa-file-image"></i>Gestão de Usuário</h5>
                    </div>
                    
                    <div class="">
                        <img alt="avatar" class="img-user" src="assets/img/user.png">
                    </div>

                    <div class="img-text">
                        <h3>Gerso Silva</h3>
                        <h5>São João Da Boa Vista-SP</h5>
                    </div>

                    <div class="">

                    </div>

                    <div class="">
                        
                    </div>

                    <div class="">
                        
                    </div>

                    <div class="">
                        
                    </div>

                    <div class="">
                        
                    </div>
                    <br>

                    <div class="btn-div">
                        <button class="btn-profile"type="button">SALVAR MUDANÇAS</button>
                    </div>
                        
                    
                    
                </div>
               

            </div>
        </div>
    

    </div>



    <!-- Importação do JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
    <!-- Importação JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
    <!-- Importação JS - SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>