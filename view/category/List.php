<?php
  include '../sportsfju/template/HeaderCategory.php';
  
?>

    <h1 class="mb-4">Lista de Categorias</h1>

    <section id="tecnologia" class="mb-5">
      <h4>Categorias</h4>

      

      <!-- Exibe Msg Quando Exclui uma Categoria !--> 
      <?php if (!empty($_GET['msgDelete'])) { ?>
        <p class="h4"><?php echo $_GET['msgDelete']?></p> 
        <?php } ?>
    

      <table class="table table-bordered">
        <thead class="table-secondary">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Status</th>
            <th>Ações</th>
              
            </tr>
        </thead>
        <tbody>
          <?php 
          
          foreach ($Categorys as $category) {
                echo "<tr>";
                echo "<td>".$category['id']."</td>";
                echo "<td>".$category['name']."</td>";
                echo "<td>".(($category['status'] == 'ativa')? 'Ativa' : 'Inativa')."</td>";
                echo "<td>";
                echo "<a href='?route=categorias-update&id=" .$category['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='?route=categorias-delete&id=".$category['id']."' class='btn btn-danger btn-sm'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
          } ?>
            
        </tbody>
      </table>
    </section>
  
<?php 
  include '../sportsfju/template/Footer.php';
?>