<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();

$produto = array("nome" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategoria($conexao);

?>
	<h1>Formulario de Cadastro</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
        
            <?php require("produto-formulario-base.php"); ?>
            <tr>
                <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
            </tr>

        </table>

	</form>
<?php require_once("rodape.php"); ?>