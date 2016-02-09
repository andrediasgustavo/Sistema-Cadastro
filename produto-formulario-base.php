 <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"/></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"/></td>
            </tr>


            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
            </tr>

            <?php
            $usado = $produto['usado'] ? "checked='checked'" : "";
            ?>

            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$usado?> value="true">Usado</td>
            </tr>

            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria) : 
                            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                            $selecao = $essaEhACategoria ? "selected='selected'" : "";
                            ?>
                            <option class="option" value="<?=$categoria['id']?>" <?=$selecao?>>
                                <?=$categoria['nome']?><br/>
                            </option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>