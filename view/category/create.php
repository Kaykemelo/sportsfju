<?php 
include '../sportsfju/template/FormHeader.php';

?>
    
    <h2 class="mb-4">Cadastro de Categorias</h2>

    <!-- MENSAGENS -->
    <?php if (!empty($_GET['msg'])) { ?>
  <p class="h4"><?php echo $_GET['msg']; ?></p>
    <?php } ?>

  


    <!-- FORMULÁRIO -->
    <form method="POST" action="?route=categorias-insert">
      <div class="mb-3">
        <label for="name" class="form-label">Nome da Categoria</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="ativo">Ativo</option>
          <option value="inativo">Inativo</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <a href="?route=categorias" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>

  <?php 
  include '../sportsfju/template/FormFooter.php';
  ?>