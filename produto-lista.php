<?php 
	require_once("cabecalho.php"); 
	require_once("banco-produto.php");
    require_once("logica-usuario.php");
?>

<table class="table table-bordered"> 

<?php
$produtos = listaProdutos($conexao);
foreach ($produtos as $produto) :
?>
	<tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 40) ?></td>
        <td><?= $produto['categoria_nome'] ?></td>
        <div class="mostra">
        <?php 
        if(usuarioEstaLogado()){ ?>
           <td><a class="btn btn-primary btn-lg" href="produto-altera-form.php?id=<?=$produto['id']?>">Alterar</a>
            <td>
            	<form action="remove-produto.php" method="post">
            		<input type="hidden" name="id" value="<?=$produto['id']?>">
            		<button class="btn btn-danger btn-lg">Remover</button>
            	</form>
            </td>
            <?php }else{ ?>
                <style>.mostra{display='none';}</style>
        <?php }?>
        </div>
    </tr>
<?php
endforeach
?>
<?php require_once("rodape.php"); ?>

</table>