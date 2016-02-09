<?php 
session_start();
require_once("banco-usuario.php");
require_once("logica-usuario.php");
?>
<?php
$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha invalido.";
	header("Location: index.php");
}else{
	$_SESSION["success"] = "Usuário logado com sucesso.";
	$_SESSION['userid'] = $usuario['id'];
    $_SESSION["username"] = $usuario['nome'];
    $_SESSION["useremail"] = $usuario['email'];
    $_SESSION["userpassword"] = $usuario['senha'];
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}