<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Login</h2>

<?php if (isset($_GET['msgErro'])) { ?>
    <h4><?php echo $_GET['msgErro']?></h4>
<?php } ?>

<?php if (isset($_GET['msgRegister'])) { ?>
    <h4><?php echo $_GET['msgRegister']?></h4>
<?php } ?>



<form method="post" action="?route=usuario-login">

    <div class="mb-3">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite Seu Email"  required>
    </div>

    <div class="mb-3">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite Sua Senha"  required>
    </div>

    <div class="d-flex justify-content-between">
        <a href="?route=usuario-login" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>


<?php 
include '../sportsfju/template/FormFooter.php';
?>