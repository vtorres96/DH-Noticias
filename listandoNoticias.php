<!DOCTYPE html>
<html lang="en">
  <?php require_once("config/conn.php"); ?>
  <?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <?php
    $sql = "SELECT * FROM noticias";
    $query = $db->prepare($sql);
    $query->execute();

    $noticias = $query->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <?php if(!$noticias): ?>
  <div class="container">
    <div class="mt-5">
      <h1>Notícias</h1>
      <div class="d-flex justify-content-between align-items-center mb-2">
        <p>Verifique abaixo as notícias mais cadastradas em nossa plataforma</p>
          <a href="cadastroNoticia.php">
            <button class="btn btn-primary">Nova Notícia</button>
          </a>
        </div>
    </div>
  </div>
  <?php else: ?>
    <div class="container">
      <div class="mt-5">
        <h1>Notícias</h1>
        <div class="d-flex justify-content-between align-items-center mb-2">
          <p>Verifique abaixo as notícias mais cadastradas em nossa plataforma</p>
            <a href="cadastroNoticia.php">
              <button class="btn btn-primary">Nova Notícia</button>
            </a>
          </div>
        </div>
        <div class="card-deck">
          <?php foreach($noticias as $noticia): ?>
            <div class="card col-4 col-md-4 col-sm-10">
              <a href="cadastroNoticia.php?id=<?= $noticia["id"] ?>">
                <img class="card-img-top img-fluid" src="<?= $noticia["imagem"] ?>" alt="Imagem de capa do card">
              </a>
              <div class="card-body">
                <h5 class="card-title"><?= $noticia["titulo"] ?></h5>
                <p class="card-text"><?= $noticia["descricao"] ?></p>
                <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php require_once("inc/footer.php"); ?>
  <?php require_once("inc/scripts.php"); ?>
</body>
</html>