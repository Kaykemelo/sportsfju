<?php
  include '../sportsfju/template/Header.php';
  
?>

    <h1 class="mb-4">Lista de Categorias</h1>

    <section id="tecnologia" class="mb-5">
      <h4>Tecnologia</h4>
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
          } ?>
            <td>
              <a href="form.html?id=1" class="btn btn-warning btn-sm">Editar</a>
              <a href="delete.html?id=1" class="btn btn-danger btn-sm">Excluir</a>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  
<?php 
  include '../sportsfju/template/Footer.php';
?>