<?php


$queryBusca2 = "SELECT id_grupo, nome FROM tbl_grupousuarios";
$result2 = mysqli_query($conexao,$queryBusca2);

?>

<div class="col-md-12">
    <div class="form-group">
        <label for="">Grupo</label>
        <div class="col-sm-12">
            <select name="grupo" class="form-control" required>
                <option value="" selected disabled>Informe uma Opção</option>
                <?php while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)): ?>
                <option value="<?php echo $row2['id_grupo']; ?>">
                    <?php echo $row2['nome']; ?>
                </option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>
</div>
