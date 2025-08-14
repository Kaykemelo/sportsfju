<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Alteração de Rodadas</h2>
<?php if (isset($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg']?></h4>
<?php   } ?>



<form method="POST" action="?route=rodadas-update&id=<?php echo $round['id'] ?>">

        <input type="hidden" name="id" id="id" value="<?php echo $round['id']?>">


        <div class="mb-3">
            <label for="round" class="form-label">Rodada:</label>
            <input type="number"  class="form-control"  id="round" name="round_number" min="1" value="<?php echo $round['round_number']?>"  required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Data:</label>
            <input type="date" class="form-control" id="date" name="date_round" value="<?php echo $round['date_round']?>"  required>

        </div>
        
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
             <select class="form-select" id="status" name="status" required>
                <option value="">Selecione</option>
                <option value="ativo" <?php echo ($round['status_id'] == 1) ? 'selected' : '' ?>>Ativa</option>
                <option value="inativo" <?php echo ($round['status_id'] == 0) ? 'selected' : ''?>>Inativa</option>
            </select>

        </div>

        <div class="d-flex justify-content-between">
            <a href="?route=rodadas" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
</form>    


