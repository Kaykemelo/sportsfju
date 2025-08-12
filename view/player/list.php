<?php 
include '../sportsfju/template/HeaderPlayer.php';
?>

<h1 class="mb-4">Lista De Jogadores</h1>
<section id="tecnologia" class="mb-5">
    <h4>Jogadores</h4>

    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($Players as $player) {
                    echo "<tr>";
                    echo "<td>".$player['id']."</td>";
                    echo "<td>".$player['name']."</td>";
                    echo "<td>".$player['phone']."</td>";
                    echo "<td>".$player['email']."</td>";
                    echo "<td>".$player['status']."</td>";
                    echo "<td>";
                    echo "<a href='?route=jogadores-update&id=" .$player['id']. "' class='btn btn-warning btn-sm me-1'>Editar</a>";
                    echo "<a href='#&id=" .$player['id']. "' class='btn btn-danger btn-sm'>Excluir</a>";
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