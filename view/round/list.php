<?php 
include '../sportsfju/template/HeaderRound.php';
?>

<h1 class="mb-4">Lista de Rodadas</h1>
<?php if (isset($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg'] ?></h4>
<?php }?>

<section id="tecnologia" class="mb-5">

    <h4>Rodadas</h4>
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
                echo "<td>".(($round['status_id'] == 1) ? 'Ativa' : 'Inativa')."</td>";
                echo "<td>";
                echo "<a href='?route=rodadas-update&id=" .$round['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                echo "<a href='?route=rodadas-delete&id=" .$round['id']. "' class='btn btn-danger  btn-sm'>Editar</a>";
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