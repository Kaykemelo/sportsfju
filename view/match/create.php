<?php 
include '../sportsfju/template/FormHeader.php';
?>

    <h2 class="mb-4">Cadastro de Partidas</h2>

    <?php if (isset($_GET['msg'])) { ?>
        <h4><?php echo $_GET['msg']?></h4>
    <?php }?>


    <form action="?route=partidas-insert" method="post">

        <div class="mb-3">
            <label for="match" class="form-label">Rodada:</label>
            <input type="number" class="form-control"  id="round" name="round"  min="1"  required>

        </div>

        <div class="mb-3">
            <label for="home_team" class="form-label">Time Casa:</label>
            <select class="form-select" id="home_team" name="home_team" required>
                <option value="">Selecione</option>
                <?php 
                    foreach ($Teams as $team) {
                        echo "<option value=".$team['id'].">".$team['name']."</option>";
                    }
                
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="away_team" class="form-label">Time Fora:</label>
            <select class="form-select" id="away_team" name="away_team" required>
                <option value="">Selecione:</option>
                <?php 
                    foreach ($Teams as $team) {
                        echo "<option value=".$team['id'].">".$team['name']."</option>";
                    }
                ?>
            </select>

        </div>

        <div class="mb-3">
            <label for="home_goals" class="form-label">Pontos Time Casa:</label>
            <input type="number" class="form-control"  id="home_goals" name="home_goals"  min="0" required>

        </div>

        <div class="mb-3">
            <label for="away_goals" class="form-label">Pontos Time Fora:</label>
            <input type="number" class="form-control"  id="away_goals" name="away_goals"  min="0" required>

        </div>

        <div class="mb-3">
            <label for="status_match" class="form-label">Status da Partida:</label>
            <select class="form-select" id="status" name="status" required>
                <option value="">Selecione</option>
                <?php 
                    foreach ($aMatchStatus as $matchstatus) {
                        echo "<option value=".$matchstatus['id'].">".$matchstatus['description']."</option>";
                    }
                ?>

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