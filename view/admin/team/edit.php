<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Alteração de Times</h2>

<?php if (!empty($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg'];?></h4>
<?php  }?>



<form method="post" action="?route=times-update&id=<?php echo $team['id']?>">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $team['id']?>">

    <div class="mb-3">
      <label for="name" class="form-label">Nome do Time:</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $team['name'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status:</label>
      <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="ativo" <?php echo ($team['status'] == 1) ? 'selected' : '' ?>>Ativo</option>
          <option value="inativo" <?php echo ($team['status'] == 0) ? 'selected' : '' ?>>Inativo</option>
        </select>
    </div>

    <div class="d-flex justify-content-between">
        <a href="?route=times" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>

</form>


<?php 
include '../sportsfju/template/FormFooter.php';
?>