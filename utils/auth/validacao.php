<?php
  require_once("../../config/conn.php");

  require_once("../returnMessage.php");

  $email = $_REQUEST["email"];
  $senha = $_REQUEST["senha"];

  $sql = "SELECT * FROM usuarios WHERE email = :email";

  $query = $db->prepare($sql);

  $query->execute([
    ":email" => $email
  ]);

  $usuario = $query->fetch(PDO::FETCH_ASSOC);

  // Se não encontrar usuário retonarmos erro
  if(!$usuario){
    echo retornaMensagem("Usuário não encontrado");
    return;
  } else {
      // Se a senha não conferir com a do banco de dados
      $senhaValida = password_verify($senha, $usuario["senha"]);
      if(!$senhaValida){
        echo retornaMensagem("Usuário ou senha inválidos");
        return;
      } else {
        // Se encontrar usuário e a senha estiver correta criamos sessão
        // e redirecionamos o usuário
        session_start();
        $_SESSION["logado"] = true;
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["nivel_acesso"] = $usuario["nivel_acesso"];

        echo retornaMensagem("Redirecionando...", true);
      }
  }

?>