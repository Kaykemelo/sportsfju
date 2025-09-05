<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Cadastro de Jogadores</h2>

<?php if (isset($_GET['msg'])) { ?>
            <h4><?php echo $_GET['msg']?></h4>
<?php }?>

<form method="POST" action="">

    <div class="mb-3">
      <label for="name" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Telefone:</label>
      <input type="text" class="form-control" id="phone" name="phone" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
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
        <a href="?route=jogadores" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>

</form>











<?php 
include '../sportsfju/template/FormFooter.php';
?>