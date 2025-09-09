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
                <article class="card-categorias">
                    <img src="../../../sportsfju/assets/images/futebol-categoria.jpg" alt="categoria-futebol">
                    <h2>Futebol</h2>
                </article>
                <article class="card-categorias">
                    <img src="../../../sportsfju/assets/images/volei-categoria.jpg" alt="categoria-volei">
                    <h2>Volei</h2>
                </article>
                <article class="card-categorias">
                    <img src="../../../sportsfju/assets/images/luta-categoria.jpg" alt="categoria-lutas">
                    <h2>Lutas</h2>
                </article>
                <article class="card-categorias">
                    <img src="../../../sportsfju/assets/images/basquete-categoria.jpg" alt="categoria-basquete">
                    <h2>Basquete</h2>
                </article>
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