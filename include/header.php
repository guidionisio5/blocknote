    <nav class="navbar navbar-expand-lg header">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link texto-menu" href="paginaPrincipal.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link texto-menu" href="central-escritor.php">Central do Escritor</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link texto-menu" href="#" data-bs-toggle="dropdown">
                Categoria
              </a>
              <ul class="dropdown-menu texto-menu bg-dark">
                <li><a class="dropdown-item texto-menu" href="categorias.php">Escola</a></li>
                <li><a class="dropdown-item texto-menu" href="categorias.php">Livros</a></li>
                <li><a class="dropdown-item texto-menu" href="categorias.php">Treino</a></li>
                
              </ul>
            </li>
            
            <li class="nav-item">
              <a class="nav-link texto-menu" href="#">Lembretes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link texto-menu" href="#">Anotações</a>
            </li>
          </ul>
          <div class="d-flex">
            
            <button type="button" class="btn btn-link nav-link py-2 px-0 px-lg-2" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
              <img src="assets/img/user.png" alt="" class="user-img">
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
      </div>
    </nav>
    
