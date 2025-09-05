<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Cadastro de Rodadas</h2>
<?php if (isset($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg']?></h4>
<?php   } ?>




<form method="POST" action="?route=rodadas-insert">
        <div class="mb-3">
            <label for="round" class="form-label">Rodada:</label>
            <input type="number"  class="form-control"  id="round" name="round_number" min="1" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Data:</label>
            <input type="date" class="form-control" id="date" name="date_round" required>

        </div>
        
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
             <select class="form-select" id="status" name="status" required>
                <option value="">Selecione</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>

        </div>

        <div class="d-flex justify-content-between">
            <a href="?route=rodadas" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
</form>    

<?php 
include '../sportsfju/template/FormFooter.php';
?>