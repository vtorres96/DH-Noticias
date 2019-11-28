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

  <div class="container">
    <div class="mt-5">
      <div class="col-md-6">
        <h1>Cadastro de Notícia</h1>
        <p class="text-muted">Preencha o formulário abaixo para inserir uma nova notícia na plataforma.</p>
      </div>
      <form action="utils/noticias/salvar.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="col-md-6">
              <label for="input-titulo">Título</label>
              <input type="text" class="form-control" name="titulo" id="input-titulo" placeholder="Insira o título da sua notícia">
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-6">
              <label for="input-imagem">Imagem</label>
              <input type="file" class="form-control" name="imagem" id="input-imagem">
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-6">
              <label for="input-descricao">Descrição</label>
              <textarea class="form-control" name="descricao" id="input-descricao" placeholder="Insira a descrição da sua notícia..."></textarea>
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