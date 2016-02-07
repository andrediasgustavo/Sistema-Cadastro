<?php
require_once("conecta.php");
function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'";
	$resultado =  mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function cadastraUsuario($conexao, $nome, $email, $senha){
	$nome = mysqli_real_escape_string($conexao, $nome);
	$email = mysqli_real_escape_string($conexao, $email);
	$senha = mysqli_real_escape_string($conexao, $senha);
	$senhaMd5 = md5($senha);
	$query = "insert into usuarios (nome, email, senha) values ('{$nome}', '{$email}', '{$senhaMd5}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;

}

function listaUsuario($conexao, $nome){
	$query = "select * from usuarios where nome = {$nome}";
	$resultado =  mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
	var_dump($usuario);
}