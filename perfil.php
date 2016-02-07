<?php 
	require_once("cabecalho.php"); 
    require_once("logica-usuario.php");
?>

<h1>Perfil</h1>
<table class="table">

<?php
$usuario = listaUsuario($conexao, usuarioLogado());
?>

	<tr>
        <td>Nome</td>
        <td><?=$usuario['nome']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?=$usuario['email']?></td>
    </tr>


<?php require_once("rodape.php"); ?>

</table>