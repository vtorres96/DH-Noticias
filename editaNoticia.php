<?php
    session_start();
    
    if(!isset($_SESSION["logado"])){
      header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once("config/conn.php"); ?>
  <?php require_once("inc/head.php");  ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <?php
    //SELECIONA A NOTÍCIA
    if (isset($_GET) && $_GET && $_GET["id"]) {
      $query = $db->prepare('SELECT * FROM noticias WHERE id = :id');
      
      $query->execute([
          ":id" => $_GET["id"]
      ]);
      
      $noticia = $query->fetch(PDO::FETCH_ASSOC);
    }
  ?>

  <div class="container">
    <div class="mt-5">
      <?php if(isset($noticia) && $noticia): ?>
        <div class="col-md-6">
          <h1>Alteração de Notícia</h1>
          <p class="text-muted">Preencha as informações que deseja alterar desta notícia.</p>
        </div>
        <form action="utils/noticias/editar.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12">
              <div class="col-md-6">
                <label for="input-titulo">Título</label>
                <input type="text" value="<?= $noticia["titulo"] ?>" class="form-control" name="titulo" id="input-titulo" placeholder="Insira o título">
              </div>
            </div>
            <div class="form-group col-md-12">
              <div class="col-md-6">
                <label for="input-imagem">Imagem Atual</label>
                <img class="card-img-top img-fluid" src="<?= $noticia["imagem"] ?>" alt="">
                <input type="file" class="form-control" name="imagem" id="input-imagem">
              </div>
            </div>
            <div class="form-group col-md-12">
              <div class="col-md-6">
                <label for="input-descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="input-descricao"><?= $noticia["descricao"] ?></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
    </div>
  </div>

  <?php require_once("inc/footer.php"); ?>
  <?php require_once("inc/scripts.php"); ?>
  <script type="text/javascript" src="ajax/validatorCreate.js"></script>
</body>
</html>