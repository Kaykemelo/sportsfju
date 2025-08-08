<?php include '../sportsfju/template/FormHeader.php'; ?>

<h2 class="mb-4">Alteração de Campeonatos</h2>


<form method="POST" action="?route=campeonatos-update&id=<?php echo $Championship['id'] ?>">

    <input type="hidden" class="form-control" id="championship" name="championship" value="<?php echo $Championship['id']?>">

    <!--MENSAGENS-->
    <?php if (!empty($_GET['msg'])) { ?>
        <h4><?php echo $_GET['msg'];?></h4>
   <?php } ?>
        



      <div class="mb-3">
        <label for="name" class="form-label">Nome do Campeonato:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $Championship['name']?>" required>
      </div>

     <div class="mb-3">
        <label for="category" class="form-label">Categorias:</label>
        <select class="form-select" id="category" name="category" required>
           <?php 
           foreach ($aCategory as $category) {
        
            echo "<option value=".$category['id'].">".$category['name']."</option>";
           } ?> 
        </select>
      </div>

     <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="ativo" <?php echo ($Championship['status'] == 1) ? 'selected':''?>>Ativo</option>
          <option value="inativo"<?php echo ($Championship['status'] == 0)? 'selected':''?>>Inativo</option>
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