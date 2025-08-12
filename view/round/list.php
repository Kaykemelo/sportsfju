<?php 
include '../sportsfju/template/HeaderRound.php';
?>

<h1 class="mb-4">Lista de Rodadas</h1>
<section id="tecnologia" class="mb-5">

<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th>Id</th>
            <th>Rodada</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>

    </thead>
    <tbody>
        <?php
            foreach ($Rounds as $round) {
                echo "<tr>";
                echo "<td>".$round['id']."</td>";
                echo "<td>".$round['round_number']."</td>";
                echo "<td>".$round['date_round']."</td>";
                echo "<td>".(($round['status_id'] == 'ativa') ? 'Ativa' : 'Inativa')."</td>";
                echo "<td>";
                echo "<a href='#&id=" .$round['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='#&id=" .$round['id']. "' class='btn btn-danger  btn-sm'>Editar</a>";
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