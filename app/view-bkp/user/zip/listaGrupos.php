<?php


$queryBusca = "SELECT id_grupo, nome FROM tbl_grupousuarios";
$result = mysqli_query($conexao,$queryBusca);

?>


    <div class="form-group">
        <label for="">Grupo</label>
        
            <select name="grupo" class="form-control" required>
                <option value="" disabled>Informe uma Opção</option>
                <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                <option value="<?php echo $row['id_grupo']; ?>">
                    <?php echo $row['nome']; ?>
                </option>
                <?php endwhile; ?>
            </select>
     
    </div>