<?php 

include '../sportsfju/template/HeaderMatch.php';
?>

<h1 class="mb-4">Lista de Partidas</h1>

<?php if (isset($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg']?></h4>
<?php } ?>

<section id="tecnologia" class="mb-5">
    <h4>Partidas</h4>
    
<table class="table table-bordered">
    <thead class="table-secondary">

        <tr>
            <th>ID</th>
            <th>Rodada</th>
            <th>Time Casa</th>
            <th>Time Fora</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>

    </thead>
    <tbody>
        <?php

            foreach ($matches as $match) {
                echo "<tr>";
                echo "<td>".$match['id']."</td>";
                echo "<td>".$match['round_id']."</td>";
                echo "<td>".$match['home_goals']."</td>";
                echo "<td>".$match['away_goals']."</td>";
                echo "<td>".(($match['status_id'] == 1) ? 'Ativa' : 'Inativa')."</td>";
                echo "<td>";
                echo "<a href='?route=partidas-update&id=".$match['id']."' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='?route=partidas-delete&id=".$match['id']."' class='btn btn-danger btn-sm '>Excluir</a>";
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