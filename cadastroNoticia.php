<!DOCTYPE html>
<html lang="en">
  <?php require_once("config/conn.php"); ?>
  <?php require_once("inc/head.php");  ?>
<body>
  <?php 
  
    session_start(); 
  
    $logado = $_SESSION["logado"];
    $nivel_acesso = $_SESSION["nivel_acesso"];

    if(!isset($logado)){
      header("Location: indexLogados.php");
    }

    if($nivel_acesso == 0){
      $active = "redator"; 
    }

    require_once("inc/header.php");

    //SELECIONA A NOTÍCIA
    if (isset($_GET) && $_GET["id"]) {
      $query = $db->prepare('SELECT * FROM noticias WHERE id = :id');
      
      $query->execute([
          ":id" => $_GET["id"]
      ]);
      
      $noticia = $query->fetch(PDO::FETCH_ASSOC);
    }
  ?>

  <div class="container mt-5">
      <?php if(isset($noticia) && $noticia): ?>
        <div class="col-md-6">
          <h1>Alteração de Notícia</h1>
          <p class="text-muted">Preencha as informações que deseja alterar esta notícia na plataforma</p>
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
                <label for="input-imagem">Imagem</label>
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
      <?php else: ?>
        <div class="col-md-6">
          <h1>Cadastro de Notícia</h1>
          <p class="text-muted">Preencha o formulário abaixo para inserir uma nova notícia na plataforma</p>
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
      <?php endif; ?>
  </div>

  <?php require_once("inc/footer.php"); ?>
</body>
</html>