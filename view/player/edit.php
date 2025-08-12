<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Edição de Jogadores</h2>

<?php if (!empty($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg'];?></h4>
<?php } ?>

<form method="POST" action="?route=jogadores-update&id=<?php echo $Player['id']?>">
<?php //var_dump($Player);
//exit;
?>

    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $Player['id']?>">
   
    <div class="mb-3">
      <label for="name" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $Player['name']?>" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Telefone:</label>
      <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $Player['phone']?>">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $Player['email']?>">
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status:</label>
      <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="ativo"<?php echo ($Player['status'] == 1) ? 'selected' : '' ?>>Ativo</option>
          <option value="inativo"<?php echo ($Player['status'] == 0) ? 'selected' : '' ?>>Inativo</option>
        </select>
    </div>

    <div class="d-flex justify-content-between">
        <a href="?route=jogadores" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>

</form>

<?php
include '../sportsfju/template/FormFooter.php';
?>