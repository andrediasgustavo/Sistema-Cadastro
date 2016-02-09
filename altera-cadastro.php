<?php 
session_start();
	require_once("cabecalho.php"); 
	require_once("banco-usuario.php");
?>

<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["novasenha"];

if($nome == "" || $email == "" || $senha == ""){
	$_SESSION["danger"] = "Prencha todos os dados.";
	header("Location: altera-perfil-form.php");
}else{
	alteraCadastro($conexao, $id, $nome, $email, $senha);
	$_SESSION["success"] = "Cadastro alterado com sucesso.";;
	header("Location: index.php");
}
die();
require_once("rodape.php"); 
?>

