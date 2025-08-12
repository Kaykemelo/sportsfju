<?php 

include '../sportsfju/template/HeaderChampionship.php';
?>

<h1 class="mb-4">Lista de Campeonatos</h1>

    <section id="tecnologia" class="mb-5">
      <h4>Campeonatos</h4>

    <?php  if (!empty($_GET['msg'])) { ?>
      <h4><?php echo $_GET['msg'];?></h4>
   <?php } ?>  
     <table class="table table-bordered">
        <thead class="table-secondary">
          <tr>
            <th>ID</th>
            <th>ID Campeonato</th>
            <th>Nome</th>
            <th>Status</th>
            <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            foreach ($aChampionship as $championship) {
           
                echo "<tr>";
                echo"<td>".$championship['id']."</td>"; 
                echo "<td>".$championship['category_id']."</td>";
                echo "<td>".$championship['name']."</td>";
                echo "<td>".(($championship['status'] == 'ativo')? 'Ativo': 'Inativo')."</td>";
                echo "<td>";
                echo "<a href='?route=campeonatos-update&id=" .$championship['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='?route=campeonatos-delete&id=".$championship['id']."' class='btn btn-danger btn-sm'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            
            }
            ?>

        </tbody>
      </table>
    </section>  

<?php

include '../sportsfju/template/Footer.php';
?>    

