<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="page/assets/img/icone.png" type="image/x-icon">
    <title>BlockNote</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/loginCadastrar.css">
</head>
<body>

    <header>
        <div class="navbar">
            <a href="index.html">
                <img src="assets/img/logo2.png" alt="">
            </a>
            <ul>
                
                <a href="sobre.html" class="a-li">
                    <li> Sobre nós </li>
                </a>
                <a href="duvidas.html" class="a-li">
                    <li> Dúvidas </li>
                </a>
                <a href="cadastrarUser.html" class="a-li">
                    <li> Cadastrar-se </li>
                </a>
            </ul>

        </div>   
    </header>

    <!-- <div class="img-fundo">
        
        <img src="page/assets/img/fundo.png" alt="">
    
    </div> -->

    <div class="container">
        <form id="loginUser" class="form">
            <p class="p">Bem-vindo(a) de Volta!</p>
            <?php
                if(isset($_SESSION['error'])) {?>
                    <div class="mensagem-error" role="alert"><?php echo $_SESSION['error'] ?></div>
            <?php unset($_SESSION['error']); }	?>
            <div class="item">
                <label for="email" class="label">E-mail</label>
                <input type="email" name="email" id="email" class="input">
            </div>
            <div class="item">
                <label for="senha" class="label">Senha</label>
                <input type="password" name="senha" id="senha" class="input">
            </div>
                <button type="button" onclick="loginUser()" class="cadastrar">ENTRAR</button>
            <div class="a">
                <a href="cadastrarUser.html" class="a">Ainda não tem uma conta? Cadastre-se ja!</a>
            </div>
        </form>
    </div>
    <!-- Importação do JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    
    <!-- Importação JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
    <!-- Importação JS - SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    <!-- Importação JS da página -->
    <script src="assets/js/script.js"></script>
</body>
</html>