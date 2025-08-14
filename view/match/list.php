<?php 

include '../sportsfju/template/HeaderMatch.php';
?>

<h1 class="mb-4">Lista de Partidas</h1>
<section id="tecnologia" class="mb-5">

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
                echo "<a href='id=".$match['id']."' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='id=".$match['id']."' class='btn btn-danger btn-sm '>Excluir</a>";
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