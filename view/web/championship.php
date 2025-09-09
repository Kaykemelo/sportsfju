<?php

include '../sportsfju/template/championshipHeader.php';
?>

    <main>
        <section class="banner-campeonato">
            <div class="imagem-campeonato">
                <img src="../../../sportsfju/assets/images/banner-campeonato.jpg" alt="Banner-campeonato" class="imagem-banner">
            </div>
        </section>

        <section class="categorias">
            <div class="titulo-categorias">
                <h2>Categorias</h2>
            </div>
            <div class="lista-categorias">
                <?php 
                    foreach ($Categorys as $category) {
                        echo '<article class="card-categorias">';
                        echo "<img src='../../../sportsfju/assets/images/{$category['name']}-categoria.jpg' alt='imagem-categorias'>";
                        echo '<h2>'.$category['name'].'</h2>';
                        echo '</article>';
                    }
                ?>
            </div>
        </section>
        <hr>

        <section class="campeonatos">
            <div class="titulo-campeonatos">
                <h2>Campeonatos</h2>
            </div>
            <div class="lista-campeonatos">
                <?php 
                    foreach ($aChampionship as $championship) {
                        echo '<article class="card-campeonatos">';
                        echo '<h3>'.$championship['name'].'<h3>';
                        echo '<p>Local : Quadra FJU</p>';
                        echo '</article>';
                    }
                ?>

            </div>
        </section>
        <hr>
        <section class="regras">
            <div class="titulo-regras">
                <h2>Regras Importantes</h2>
            </div>

            <div class="lista-regras">
                <ul>
                    <li>Participar da Reunião</li>
                    <li>Não Jogar Descalço</li>
                    <li>Não Falar Palavrão</li>
                    <li>Jogar em um Time</li>
                </ul>
            </div>
        </section>
    </main>
<?php
include '../sportsfju/template/championshipFooter.php';
?>
  
</body>
</html>