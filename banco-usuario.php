<?php
require_once("conecta.php");
function buscaUsuario($conexao, $email, $senha){
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select id, nome, email, senha from usuarios where email = '{$email}' and senha = '{$senha}'";
	$resultado =  mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function cadastraUsuario($conexao, $nome, $email, $senha){
	$nome = mysqli_real_escape_string($conexao, $nome);
	$email = mysqli_real_escape_string($conexao, $email);
	$senha = mysqli_real_escape_string($conexao, $senha);
	$query = "insert into usuarios (nome, email, senha) values ('{$nome}', '{$email}', '{$senha}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;

}

function alteraCadastro($conexao, $id, $nome, $email, $senha){
	 $nome = mysqli_real_escape_string($conexao, $nome);
	 $email = mysqli_real_escape_string($conexao, $email);
	 $senha = mysqli_real_escape_string($conexao, $senha);
	 $query = "update usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}' where id = '{$id}'";
	 return mysqli_query($conexao, $query);
}

function removeCadastro($conexao, $id){
	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query);
}