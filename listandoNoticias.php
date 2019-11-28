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
          <p>No momento não existem notícias na plataforma, adicione uma nova notícia.</p>
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
          <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card h-100">
              <img class="card-img-top img-fluid mt-2" src="<?= $noticia["imagem"] ?>" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title"><?= $noticia["titulo"] ?></h5>
                <p class="card-text"><?= $noticia["descricao"] ?></p>
                <p class="card-text">
                  <small class="text-muted">
                    Atualizada em <?= date('d/m/Y', strtotime($noticia['data_atualizacao'])); ?>
                  </small>
                </p>
              </div>
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