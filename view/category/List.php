<?php
  include '../sportsfju/template/HeaderCategory.php';
  
?>

    <h1 class="mb-4">Lista de Categorias</h1>

    <section id="tecnologia" class="mb-5">
      <h4>Categorias</h4>
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
          
          foreach ($aCategory as $category) {
                echo "<tr>";
                echo "<td>".$category['id']."</td>";
                echo "<td>".$category['name']."</td>";
                echo "<td>".$category['status']."</td>";
                echo "<td>";
                echo "<a href='http://localhost/sportsfju/?route=categorias-update&id=" .$category['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='delete.html?id=".$category['id']."' class='btn btn-danger btn-sm'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
          } ?>
            
        </tbody>
      </table>
    </section>
  
<?php 
  include '../sportsfju/template/Footer.php';
?>