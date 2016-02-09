<?php 
session_start();
	require_once("cabecalho.php"); 
    require_once("logica-usuario.php");
    require_once("banco-usuario.php");

    if(!usuarioEstaLogado()){
    $_SESSION["danger"] = "Você não está logado";
    header("Location: index.php");
 }
 
?>

<h1>Perfil</h1>
<form action="altera-cadastro.php" method="post">
    <input type="hidden" name="id" value="<?=$_SESSION['userid']?>"/>
    <table class="table">
    	<tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?= $_SESSION['username']?>"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="text" name="email" value="<?= $_SESSION['useremail']?>"/></td>
        </tr>
         <tr>
            <td>Senha Atual</td>
            <td><input class="form-control" type="password" name="senha" value="<?= $_SESSION['userpassword']?>"/></td>
        </tr>
        <tr>
            <td>Nova Senha</td>
            <td><input class="form-control" type="password" name="novasenha" value=""/></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary btn-lg" type="submit">Alterar Cadastro</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>