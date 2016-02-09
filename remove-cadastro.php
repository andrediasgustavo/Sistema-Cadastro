<?php 
	require_once("cabecalho.php"); 
	require_once("banco-usuario.php");
	require_once("logica-usuario.php");

$id = $_SESSION['userid'];

removeCadastro($conexao, $id);

$_SESSION["success"] = "Usuario removido com sucesso!";
header("Location: index.php");
session_destroy();
?>


<?php require_once("rodape.php"); ?>