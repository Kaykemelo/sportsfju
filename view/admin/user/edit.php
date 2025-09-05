<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Alteração de Usuarios</h1>
<?php if (isset($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg']?></h4>
<?php   }?>

<form action="?route=usuario-update&id=<?php echo $aUser['id']?>" method="post">

    <input type="hidden" name="id" value="<?php echo $aUser['id']?>">

    <div class="mb-3">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $aUser['name']?>"  placeholder="Digite Seu Nome" required>
    </div>

    <div class="mb-3">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $aUser['email']?>"   placeholder="Digite Seu Email" required>
    </div>

    <div class="mb-3">
        <label for="password">Senha:</label>
        <input type="text" class="form-control" id="password" name="password" value="<?php echo $aUser['password']?>"  placeholder="Digite Sua Senha" required>
    </div>

    <div class="d-flex justify-content-between">
        <a href="?route=usuarios" class="btn btn-secondary">Voltar</a>
        <button type="submit" class=" btn btn-primary">Enviar</button>
    </div>

</form>


<?php 
include '../sportsfju/template/FormFooter.php';
?>