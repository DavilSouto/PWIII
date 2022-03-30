<?php 
  require_once "Usuario.php";

  if(isset($_POST["btnLogin"])){
    
    $usuario = new Usuario();

    $usuario->setUsuario($_POST["username"]);
    $usuario->setSenha($_POST["pass"]);
    $usuario->setNome($_POST["name"]);
    $usuario->setTipoUsuario($_POST["tipousuario"]);

    $resultado = $usuario->validarAcesso($_POST["username"], $_POST["pass"]);

    echo $resultado;
  }

?>

