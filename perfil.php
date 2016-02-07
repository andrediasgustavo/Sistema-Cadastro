<?php 
session_start();
	require_once("cabecalho.php"); 
    require_once("logica-usuario.php");
?>

<h1>Perfil</h1>
<table class="table">

	<tr>
        <td>Nome</td>
        <td><?= $_SESSION['username']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $_SESSION['useremail']?></td>
    </tr>


<?php require_once("rodape.php"); ?>

</table>