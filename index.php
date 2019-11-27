<!DOCTYPE html>
<html lang="en">
  <?php require_once("inc/head.php");  ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/free-delivery.jpg" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/motoboy-delivery.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/uber-eats.jpg" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

  <main class="container">
    <section id="noticias" class="mt-3">
      <h1>Notícias</h1>
      <p>Confira abaixo as notícias mais atualizadas do nosso portal de notícias.</p>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="assets/img/free-delivery.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Este é um card mais longo com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior.</p>
            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/motoboy-delivery.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/img/uber-eats.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
            <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
          </div>
        </div>
      </div>
    </section>
      
      <section id="contato" class="mt-5">
        <h1>Contato</h1>
        <p class="text-muted">Preencha o formulário abaixo para entrar em contato conosco</p>
        <form  action="utils/mensagens/salvar.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="input-nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="input-nome" placeholder="Insira seu nome">
            </div>
            <div class="form-group col-md-6">
              <label for="input-email">E-mail</label>
              <input type="email" class="form-control" name="email" id="input-email" placeholder="Email@exemplo.com">
            </div>
            <div class="form-group col-md-12">
              <label for="textarea-mensagem">Mensagem</label>
              <textarea name="mensagem" class="form-control" id="textarea-mensagem" rows="10" placeholder="Insira sua mensagem aqui..."></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </section>

      <section class="mt-5" id="localizacao">
        <h1>Localização</h1>
        <p>Verifique a localização da nossa biblioteca</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.983057080286!2d-46.64885008593059!3d-23.569051984679056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59be874e1f11%3A0x3b0b41a1b5ea3fd!2sBiblioteca!5e0!3m2!1spt-BR!2sbr!4v1565381574508!5m2!1spt-BR!2sbr" width="100%" height="450px" frameborder="0" allowfullscreen></iframe>
      </section>
    </main>
  
  <?php require_once("inc/footer.php"); ?>
  <?php require_once("inc/scripts.php"); ?>
</body>
</html>