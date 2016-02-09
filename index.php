<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
?>

<h1>Bem Vindo</h1>

<?php if(usuarioEstaLogado()) {?>
	<p class ="mostra-alerta">Você esta logado como <?=usuarioLogado()?>.</p>
	<button id="deslogar" class="btn btn-danger btn-lg"><a href="logout.php">Deslogar</a></button>
<?php }else { ?>
	<form action="login.php" method="post">
		<table class="table tabela">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary btn-lg">Login</button></td>
		</table>
	</form>
<?php }?>
<?php require_once("rodape.php"); ?>
