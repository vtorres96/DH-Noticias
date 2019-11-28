<?php
    session_start();
    
    if(!isset($_SESSION["logado"]) && $_SESSION["nivel_acesso"] != 1){
      header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once("config/conn.php"); ?>
  <?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php"); ?>
  <?php
    //SELECIONA O USUÁRIO
    if (isset($_GET) && $_GET && $_GET["id"]) {
      $query = $db->prepare('SELECT * FROM usuarios WHERE id = :id'); 
      
      $query->execute([
          ":id" => $_GET["id"]
      ]);
      
      $usuario = $query->fetch(PDO::FETCH_ASSOC);
    }
  ?>

  <div class="container">
    <div class="mt-5">
        <?php if(isset($usuario) && $usuario): ?>
            <div class="col-12 col-md-12 col-lg-12">
                <h1>Alteração de Cadastro</h1>
                <p class="text-muted">Preencha o as informações que deseja alterar deste redator.</p>
            </div>
            <form id="formulario" action="utils/redatores/editar.php" method="POST">
                <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="col-md-6">
                            <label for="input-nome">Nome</label>
                            <input type="text" value="<?= $usuario["nome"] ?>" class="form-control" name="nome" id="input-nome" placeholder="Insira seu nome">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-6">
                            <label for="input-email">E-mail</label>
                            <input type="text" value="<?= $usuario["email"] ?>" class="form-control" name="email" id="input-email" placeholder="Email@exemplo.com">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-6">
                            <label for="input-senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="input-senha" placeholder="Insira sua senha">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        <?php else: ?>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="d-flex justify-content-center">
                    <h1>Nenhum usuário não encontrado</h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
  </div>

  <?php require_once("inc/footer.php"); ?>
  <?php require_once("inc/scripts.php"); ?>
  <script type="text/javascript" src="ajax/validatorCreate.js"></script>
</body>
</html>