<?php 
include '../sportsfju/template/FormHeader.php';
?>

<h2 class="mb-4">Alteração de Partidas</h1>

<?php if (isset($_GET['msg'])) { ?>
    <h4><?php echo $_GET['msg']?></h4>
<?php  }?>



<form action="?route=partidas-update&id=<?php echo $match['id']?>" method="post">

        <input type="hidden" name="id" id="id" value="<?php echo $match['id']?>">

        <div class="mb-3">
            <label for="match" class="form-label">Partida:</label>
            <input type="number" class="form-control"  id="match" name="match"  min="1" value="<?php echo $match['round_id']?>"  required>

        </div>

        <div class="mb-3">
            <label for="home_team" class="form-label">Time Casa:</label>
            <input type="number" class="form-control"  id="home_team" name="home_team"  min="1" value="<?php echo $match['home_team_id']?>" required>

        </div>

        <div class="mb-3">
            <label for="away_team" class="form-label">Time Fora:</label>
            <input type="number" class="form-control"  id="away_team" name="away_team" min="1" value="<?php echo $match['away_team_id'] ?>" required>

        </div>

        <div class="mb-3">
            <label for="home_goals" class="form-label">Pontos Time Casa:</label>
            <input type="number" class="form-control"  id="home_goals" name="home_goals"  min="0" value="<?php echo $match['home_goals']?>" required>

        </div>

        <div class="mb-3">
            <label for="away_goals" class="form-label">Pontos Time Fora:</label>
            <input type="number" class="form-control"  id="away_goals" name="away_goals"  min="0" value="<?php echo $match['away_goals']?>" required>

        </div>

        <div class="mb-3">
            <label for="home_goals" class="form-label">Status da Partida:</label>
            <select class="form-select" id="status" name="status" required>
                <option value="">Selecione</option>
                <option value="ativo" <?php echo ($match['status_id'] == 1) ? 'selected' : '' ?>>Ativa</option>
                <option value="inativo" <?php echo ($match['status_id'] == 0)? 'selected' : ''?>>Inativa</option>
           </select>
        </div>
            

        <div class="d-flex justify-content-between">
            <a href="?route=partidas" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>

</form>

<?php 
include '../sportsfju/template/FormFooter.php';
?>