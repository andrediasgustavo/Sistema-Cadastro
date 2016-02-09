<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");


 if(usuarioEstaLogado()){
 	$_SESSION["danger"] = "Você já está logado";
 	header("Location: index.php");
 	die();
 }
?>

<h1>Cadastre-se</h1>
	<form action="cadastro.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary btn-lg">Cadastre-se</button></td>
			</tr>
		</table>
	</form>

<?php require_once("rodape.php"); ?>