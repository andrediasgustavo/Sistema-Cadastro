<?php 
require_once("banco-usuario.php");
require_once("logica-usuario.php");
?>
<?php
$usuario = cadastraUsuario($conexao, $_POST["nome"], $_POST["email"], $_POST["senha"]);
if($usuario == null){
	$_SESSION["danger"] = "Prencha todos os dados.";
	header("Location: index.php");
}else{
	$_SESSION["success"] = "Usuario cadastrado com sucesso.";
	logaUsuario($usuario["nome"]);
	header("Location: index.php");
}
die();
?>