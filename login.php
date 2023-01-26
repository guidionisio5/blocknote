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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/pagina-inicial.css">
  <link>
  <link rel="stylesheet" href="assets/css/loginCadastrar.css">
  <link rel="stylesheet" href="assets/css/loginCadastrar2.css">
</head>

<body>





  <div class="container-login-meu">
    <div class="texto">
      <p>
        Simplicidade e <br>
        eficiencia em qualquer <br>
        lugar e dispositivo!
      </p>
    </div>
    <div class="login">

      <div >
        <nav class="navbar navbar-expand-lg d-flex">
          <div class="container-fluid navbar-100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" separa ul-meu meu-navbar " id="navbarTogglerDemo01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-ul d-flex flex-row-reverse">
                <li class="nav-item">
                  <a class="nav-link  a-navbar avbar-100" href="sobre.html">Sobre Nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  a-navbar avbar-100" href="duvidas.html">Duvidas</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>


      <form id="loginUser" class="form">
        <p class="p">Bem-vindo(a) de Volta!</p>
        <?php
        if (isset($_SESSION['error'])) { ?>
          <div class="mensagem-error" role="alert"><?php echo $_SESSION['error'] ?></div>
        <?php unset($_SESSION['error']);
        }  ?>
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