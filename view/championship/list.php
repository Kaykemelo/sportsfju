<?php 

include '../sportsfju/template/HeaderChampionship.php';
?>

<h1 class="mb-4">Lista de Campeonatos</h1>

    <section id="tecnologia" class="mb-5">
      <h4>Campeonatos</h4>

     <table class="table table-bordered">
        <thead class="table-secondary">
          <tr>
            <th>ID</th>
            <th>ID Campeonato</th>
            <th>Avatar</th>
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
                echo "<td>".$championship['avatar']."</td>";
                echo "<td>".$championship['name']."</td>";
                echo "<td>".$championship['status']."</td>";
                echo "<td>";
                echo "<a href='" .$championship['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='".$championship['id']."' class='btn btn-danger btn-sm'>Excluir</a>";
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

