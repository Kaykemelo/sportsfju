<?php
include '../sportsfju/template/HeaderUser.php';
?>

<h1 class="mb-4">Lista de Usuarios</h1>
<h4>Usuarios</h4>

<section class="mb-5">

    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>".$user['id']."</td>";
                    echo "<td>".$user['name']."</td>";
                    echo "<td>".$user['email']."</td>";
                    echo "<td>".$user['password']."</td>";
                    echo "<td>";
                    echo "<a href='?route=usuario-update&id=".$user['id']."'class='btn btn-warning btn-sm me-1'>Editar</a> ";
                    echo "<a href='?route=usuario-delete&id=".$user['id']."'class='btn btn-danger btn-sm'>Excluir</a>";
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