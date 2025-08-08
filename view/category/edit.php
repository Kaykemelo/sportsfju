<?php

include '../sportsfju/template/FormHeader.php'; 
?>

<h2 class="mb-4">Alteração de Categorias</h2>

    <!-- MENSAGENS -->
    <?php if (!empty($_GET['msgUpdate'])) { ?>
  <p class="h4"><?php echo $_GET['msgUpdate']; ?></p>
    <?php } ?>




    <!-- FORMULÁRIO -->
    <form method="POST" action="?route=categorias-update&id=<?php echo $CategoryId['id']?>">
      <div class="mb-3">

         <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $CategoryId['id'] ?>">
      
        <label for="name" class="form-label">Nome da Categoria</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $CategoryId['name'];?>">
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="">Selecione</option>
          <option value="ativo" <?php echo ($CategoryId['status'] == 1) ? 'selected' : ''?>>Ativo</option>
          <option value="inativo" <?php echo ($CategoryId['status'] == 0) ? 'selected' : ''?>>Inativo</option>
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