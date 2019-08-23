<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" width="100" height="40" class="d-inline-block mr-2" alt="Portal Na Hora">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <?php if($active == "admin"): ?>
          <li class="nav-item">
            <a class="nav-link" href="indexLogados.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastroRedator.php">Cadastro de Redator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listandoRedatores.php">Listar Redatores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listandoNoticias.php">Listar Notícias</a>
          </li>
        <?php elseif($active == "redator"): ?>
          <li class="nav-item">
            <a class="nav-link" href="indexLogados.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastroNoticia.php">Cadastrar Notícia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listandoNoticias.php">Listar Notícias</a>
          </li>
        <?php elseif($active == "comum"): ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#noticias">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contato">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#localizacao">Localização</a>
          </li>
        <?php endif  ?>
      </ul>
      <?php if($active == "admin" || $active == "redator"): ?>
        <?php session_start()  ?>
        <div class="form-inline my-2 my-lg-0">
          <div class="name-user mr-3">Olá, <?= $_SESSION["nome"] ?></div>
          <a href="../utils/logout.php">
            <button class="btn btn-outline-info my-2 my-sm-0">Sair</button>
          </a>
        </div>
      <?php endif  ?> 
    </div>
  </nav>
</header>