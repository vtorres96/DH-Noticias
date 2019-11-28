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
    // Excluindo usuário
    if (isset($_GET) && $_GET && $_GET["id"]) {
      $query = $db->prepare('DELETE FROM usuarios WHERE id = :id');
      
      $query->execute([
        ":id" => $_GET["id"]
      ]);
    }

    $sql = "SELECT * FROM usuarios WHERE nivel_acesso = :nivel_acesso";
    $query = $db->prepare($sql);
    $query->execute([
      ":nivel_acesso" => 0
    ]);

    $redatores = $query->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <?php if(!$redatores): ?>
  <div class="container">
    <div class="mt-5">
      <h1>Redatores</h1>
        <div class="d-flex justify-content-between align-items-center mb-2">
          <p>No momento não existem redatores cadastrados na plataforma, adicione uma novo redator.</p>
          <a href="cadastroRedator.php">
            <button class="btn btn-primary">Novo Redator</button>
          </a>
        </div>
    </div>
  </div>
  <?php else: ?>
    <div class="container">
      <div class="mt-5">
        <h1>Redatores</h1>
        <div class="d-flex justify-content-between align-items-center mb-2">
          <p>Verifique abaixo os redatores cadastrados em nossa plataforma</p>
          <a href="cadastroRedator.php">
            <button class="btn btn-primary">Novo Redator</button>
          </a>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
              <thead>
                <tr>                                            
                  <th>Redator</th>
                  <th>E-mail</th>
                  <th>Nível de Acesso</th>
                  <th colspan="2">Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($redatores as $redator): ?>
                  <tr>
                    <td><?= $redator['nome'] ?></td>
                    <td><?= $redator['email'] ?></td>
                    <td><?= $redator['nivel_acesso'] ?></td>
                    <td>
                      <a href="editaRedator.php?id=<?= $redator["id"] ?>">
                        <i class="fas fa-edit"></i>
                      </a>
                    </td>
                    <td>
                      <a href="#" data-toggle="modal" data-target="#modal<?= $redator["id"] ?>">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                      <!-- Modal -->
                      <div class="modal fade" id="modal<?= $redator["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Deseja realmente excluir ?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Redator: <?= $redator["nome"] ?></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                              <a href="listandoRedatores.php?id=<?= $redator["id"] ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>			
              </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php require_once("inc/footer.php"); ?>
  <?php require_once("inc/scripts.php"); ?>
</body>
</html>