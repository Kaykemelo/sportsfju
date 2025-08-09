<?php 
include '../sportsfju/template/HeaderTeam.php';
?>


<h1 class="mb-4">Lista De Times</h1>
<section id="tecnologia" class="mb-5">
    <h4>Times</h4>

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
                foreach ($teams as $team) {
                    echo "<tr>";
                    echo "<td>".$team['id']."</td>";
                    echo "<td>".$team['name']."</td>";
                    echo "<td>".$team['status']."</td>";
                    echo "<td>";
                    echo "<a href='?route=times-update&id=" .$team['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                    echo "<a href='#&id=" .$team['id']. "' class='btn btn-danger btn-sm'>Excluir</a>";
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
