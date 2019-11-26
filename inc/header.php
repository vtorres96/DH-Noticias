<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" width="120" height="40" class="d-inline-block mr-2" alt="Portal Na Hora">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <?php if($active == "admin"): ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="cadastroRedator.php">Cadastro de Redator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="listandoRedatores.php">Listar Redatores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="listandoNoticias.php">Listar Notícias</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link name-user text-white mr-2">Olá, <?= $_SESSION["nome"] ?></a>
            </li>
            <a href="utils/auth/logout.php">
              <button class="btn btn-outline-warning">Sair</button>
            </a>
          </ul>
        <?php elseif($active == "redator"): ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="cadastroNoticia.php">Cadastrar Notícia</a>
            </li>
              <li class="nav-item">
              <a class="nav-link text-white" href="listandoNoticias.php">Listar Notícias</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link name-user text-white mr-2">Olá, <?= $_SESSION["nome"] ?></a>
            </li>
            <a href="utils/auth/logout.php">
              <button class="btn btn-outline-warning">Sair</button>
            </a>
          </ul>
        <?php elseif($active == "comum"): ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#noticias">Notícias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#localizacao">Localização</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="login.php">Minha Conta</a>
            </li>
          </ul>
        <?php endif; ?>
    </div>
  </nav>
</header>