<?php 
include '../sportsfju/template/FormHeader.php';
?>

 <h2 class="mb-4">Cadastro de Campeonatos</h2>

 <!--MENSAGEM-->
 <?php  if (!empty($_GET['msg'])) { ?>
    <p class="h4"><?php echo $_GET['msg']; ?></p>

 <?php } ?>

 <!-- FORMULÁRIO -->
    <form method="POST" action="?route=campeonatos-insert">
      <div class="mb-3">
        <label for="name" class="form-label">Nome do Campeonato:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

     <div class="mb-3">
        <label for="category" class="form-label">Categorias:</label>
        <select class="form-select" id="category" name="category" required>
          <option value="">Selecione</option>
           <?php 
           foreach ($aCategory as $category) {
            echo "<option value=".$category['id'].">".$category['name']."</option>";
           } ?> 
        </select>
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
        <a href="?route=campeonatos" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>

<?php 
include '../sportsfju/template/FormFooter.php';
?>    

