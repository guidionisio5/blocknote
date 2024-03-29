<?php 

include '../backend/imagem_usuario.php';

?>

<nav class="navbar navbar-expand-lg header">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link texto-menu" href="paginaPrincipal.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link texto-menu" href="central-escritor.php">Central do Escritor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link texto-menu" href="categorias.php">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link texto-menu" href="lembretes.php">Lembretes</a>
        </li>
      </ul>
        <div class="d-flex flex-row-reverse">
          <button type="button" class="btn btn-link nav-link py-2 px-0 px-lg-2" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
            <img src="../page/assets/img/<?php if($imagem == null){
                echo 'user.png';
              }else{
                echo 'avatar/'.$imagem;
              } ?>" alt="" class="user-img">
          </button> 
            <ul class="dropdown-menu dropdown-menu-end bg-dark p-2">
              <li>
                <a href="profile.php" class="nav-link texto-menu"><i class="bi bi-person-circle"></i> Profile</a>
              </li>
              <li>
                <a href="../backend/_logout.php" class="nav-link texto-menu"><i class="bi bi-escape"></i> Sair</a>
              </li>
            </ul>
        </div>
    </div>
  </nav>