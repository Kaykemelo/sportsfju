<?php 
include '../sportsfju/template/FormHeader.php';
?>

    <h2 class="mb-4">Cadastro de Partidas</h2>

    <form action="?route=partidas-insert" method="post">

        <div class="mb-3">
            <label for="match" class="form-label">Partida:</label>
            <input type="number" class="form-control"  id="match" name="match"  min="1"  required>

        </div>

        <div class="mb-3">
            <label for="home_team" class="form-label">Time Casa:</label>
            <input type="number" class="form-control"  id="home_team" name="home_team"  min="1" required>

        </div>

        <div class="mb-3">
            <label for="away_team" class="form-label">Time Fora:</label>
            <input type="number" class="form-control"  id="away_team" name="away_team" min="1" required>

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
            <label for="home_goals" class="form-label">Status da Partida:</label>
            <select class="form-select" id="status" name="status" required>
                <option value="">Selecione</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
           </select>
        </div>
            

        <div class="d-flex justify-content-between">
            <a href="?route=jogadores" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>


    </form>

<?php
include '../sportsfju/template/FormFooter.php';
?>