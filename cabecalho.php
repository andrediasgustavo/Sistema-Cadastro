<?php
error_reporting(E_ALL ^ E_NOTICE);
 require_once("mostra-alerta.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja</title>
	<meta charset="UTF-8">
	<link rel="icon" href="favicon.png">
	<link href="css/bootstrap.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="loja.css" rel="stylesheet" />
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="contaniner-fluid">
			<div class="navbar-header"><a href="index.php" class="navbar-brand">Minha Loja</a></div>
		</div>
		<div>
			<ul class="nav navbar-nav">
				<li><a href="produto-form.php">Adiciona Produto</a></li>
				<li><a href="produto-lista.php">Produtos</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li class="some"><a href="cadastro-form.php">Cadastre-se</a></li>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<div class="principal">

<?php

 mostraAlerta("success");
 mostraAlerta("danger");
 mostraAlerta("muted");

 ?>