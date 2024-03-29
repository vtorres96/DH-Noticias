<!DOCTYPE html>
<html lang="en">
  <?php require_once("inc/head.php"); ?>
<body>
  <?php $active = "comum"; ?>
  <?php require_once("inc/header.php"); ?>

  <div class="container">
    <div class="mt-5">
      <div class="col-12 col-md-12 col-lg-12">
          <h1>Login</h1>
          <p>Preencha o formulário para efetuar login na nossa plataforma.</p>
      </div>
      <form id="formulario" action="utils/auth/validacao.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="col-md-6">
              <label for="input-email">E-mail</label>
              <input type="text" class="form-control" name="email" id="input-email" placeholder="Email@exemplo.com">
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-6">
              <label for="input-senha">Senha</label>
              <input type="password" class="form-control" name="senha" id="input-senha">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <button id="salvar" type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <div class="col-md-12">
          <div id="mensagem"></div>
        </div>
      </form>
    </div>
  </div>

  <?php require_once("inc/footer.php"); ?>
  <?php require_once("inc/scripts.php"); ?>
  <script type="text/javascript" src="ajax/validatorLogin.js"></script>
</body>
</html>