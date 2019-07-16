<?php /*
 * Template Name: Case Coca-Cola
 * Template Post Type: post
 */ ?>
<?php require('inc/header-coca.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Destaque -->
<section id="destaque">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/baralho_logo.png"
                    alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
            </div>
        </div>
        <div class="row" id="video">
            <div class="col-1 d-none d-md-block" id="italia">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/Ilustracao_mulher_italia_baralho_campeoes.png"
                    alt="Baralho dos Campeões - Graal e Coca Cola" />
            </div>
            <div class="col-md-10 col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls="true" class="embed-responsive-item"
                        poster="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/poster-video.png">
                        <source src="<?php bloginfo('template_directory'); ?>/assets/videos/coca.mp4"
                            type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="col-1 d-none d-md-block" id="cartas">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/baralho_mockup_cartas_caixa.png"
                    alt="Baralho dos Campeões - Graal e Coca Cola" />
            </div>
        </div>
    </div>
</section>

<div class="detail">
    <!-- Matryoshka -->
    <section id="matryoshka">
        <div class="container">
            <div class="row">
                <div class="col-4 d-none d-md-block">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/baralho_campeoes_matryoshka.svg"
                        alt="Baralho dos Campeões - Graal e Coca Cola" />
                </div>
                <div class="col-md-8 col-sm-12">
                    <h1>Matryoshka</h1>
                    <p>
                        Personagens inspirados em “Matryoshkas”, brinquedo artesanal e
                        tradicional da Rússia, que é caracterizada por reunir uma série
                        de bonecas de tamanhos variados que são colocadas uma dentro das
                        outras. Nesse caso, a última “boneca” mostra o naipe da carta em
                        questão.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Naipes -->
    <section id="naipes">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h2>Naipes</h2>
                        </div>
                        <div class="col-lg-3 col-md-4 offset-md-1 col-sm-12">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/naipes.svg"
                                alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" id="icones" />
                        </div>
                        <div class="col-12">
                            <p>
                                Nos preocupamos apenas em evidenciar o Brasil representando
                                o naipe de copas, porque além de ser nossa seleção de
                                coração, também podemos fazer uso do trocadilho de “Rei das
                                Copas” na carta em questão. Os selecionados para representar
                                os naipes foram os maiores ganhadores de Copas até hoje:
                                Brasil (5 títulos), Alemanha e Itália (4 títulos) e
                                Argentina (3 títulos).
                            </p>
                            <h3>“REI DE COPAS”, ou “rei das copas” ;)</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block" id="ilustra">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustracao_torcedor_brasil.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" />
                </div>
            </div>
        </div>
    </section>
</div>

<div class="detail detail-2">
    <!-- Cartas -->
    <section id="cartas">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/embalagem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/rei_brasil.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/a_copas_brasil.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/coringa_azul.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/coringa_vermelho.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/a_espada_alemanha.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/dama_alemanha.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/cartas/verso_cartas.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <!-- Ilustrações -->
    <section id="ilustracoes">
        <!-- Desktop -->
        <div class="container d-md-block d-none">
            <!-- Brasil -->
            <div class="row align-items-end" id="brasil">
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/brasil/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/brasil/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/brasil/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>

            <!-- Alemanha -->
            <div class="row align-items-end" id="alemanha">
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/alemanha/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/alemanha/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/alemanha/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>

            <!-- Italia -->
            <div class="row align-items-end" id="italia">
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/italia/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/italia/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/italia/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>

            <!-- Argentina -->
            <div class="row align-items-end" id="argentina">
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/argentina/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/argentina/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/argentina/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>
        </div>

        <!-- Mobile -->
        <div class="container d-sm-block d-md-none">
            <div class="slider " id="brasil">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/brasil/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/brasil/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/brasil/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>
            <div class="slider " id="alemanha">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/alemanha/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/alemanha/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/alemanha/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>
            <div class="slider " id="italia">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/italia/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/italia/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/italia/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>
            <div class="slider " id="argentina">
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/argentina/mulher.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/argentina/homem.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/ilustras/argentina/narrador.png"
                        alt="Baralho dos Campeões - Graal e Coca Cola" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <!-- O Verso -->
    <section id="verso">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-right">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/verso/o_verso.png"
                        alt="Verso das Cartas - Baralho dos Campeões" id="verso-image" width="700" />
                </div>
                <div class="col-md-6 col-sm-12">
                    <h2>o verso</h2>
                    <p>
                        O verso das cartas do baralho tem como referência as bandeiras
                        do Brasil e da Rússia (país sede da Copa de 2018).
                    </p>
                    <p>
                        E o vermelho também é a cor principal das marcas patrocinadoras
                        do projeto “Olho no lanche”, <span>Graal</span> e
                        <span>Coca-Cola</span>.
                    </p>
                    <div id="russia">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/verso/russia_logo.png"
                            alt="Rússia" class="img-fluid" />
                    </div>
                    <div id="brasil">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/verso/brasil_logo.png"
                            alt="Brasil" class="img-fluid" />
                    </div>
                    <br />
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/coca/verso/o_verso_logo.svg"
                        alt="Graal e Coca Cola" id="logos" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
</div>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php require('inc/footer-cases.php'); ?>