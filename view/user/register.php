<?php 
include '../sportsfju/template/FormHeader.php';
?>


<h2 class="mb-4">Cadastro de Usuario</h2>

<form method="post" action="?route=usuario-cadastro">

    <div class="mb-3">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="d-flex justify-content-between">
        <a href="?route=usuario-cadastro" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>

</form>

<?php
include '../sportsfju/template/FormFooter.php';
?>