<?php /*
 * Template Name: Case Sambé
 * Template Post Type: post
 */ ?>
<?php require('inc/header-sambe.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Destaque -->
<section id="destaque" class="text-center">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_destaque.png" alt="Sambé"
        class="img-fluid" data-aos="fade-right" />
    <div class="container">
        <p>
            O sabor tropical do guaraná foi o escolhido para desenvolver o piloto
            do projeto e consolidar o conceito.
        </p>
    </div>
</section>

<!-- Embalagens -->
<section id="embalagens">
    <!-- Guaraná -->
    <section id="guarana">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_embalagem_guarana.png"
                        alt="Embalagem Guaraná Sambé" class="img-fluid" data-aos="zoom-in" />
                </div>
                <div class="col-md-7 col-sm-12">
                    <h1>guaraná</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Cashew -->
    <section id="cashew">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_embalagem_cashew.png"
                        alt="Embalagem Cashew Sambé" class="img-fluid" data-aos="zoom-in" />
                </div>
                <div class="col-md-7 col-sm-12">
                    <h2>cashew | caju</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Passion fruit -->
    <section id="passion">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_embalagem_passion.png"
                        alt="Embalagem Passion fruit Sambé" class="img-fluid" data-aos="zoom-in" />
                </div>
                <div class="col-md-7 col-sm-12">
                    <h2>passion fruit | maracujá</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Coconut -->
    <section id="coconut">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_embalagem_coconut.png"
                        alt="Embalagem Coconut fruit Sambé" class="img-fluid" data-aos="zoom-in" />
                </div>
                <div class="col-md-7 col-sm-12">
                    <h2>coconut | coco</h2>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- Rodapé Case -->
<section id="rodape-case">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>
                    Trouxemos texturas, cores e elementos aliados à imagem da fruta,
                    buscando acentuar ainda mais o tropicalismo.
                </p>
            </div>
            <div class="col-12">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_garrafa_guarana.png"
                    alt="Garrafa de Guaraná Sambé" class="img-fluid" data-aos="zoom-in" id="garrafa" />
            </div>
            <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-4 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_logo.svg" alt="Sambé"
                    class="img-fluid" />
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_guarana_detail.png"
                    alt="Sambé" class="img-fluid" id="guarana" />
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/sambe/sambe_detail.svg" alt="Sambé"
                    class="img-fluid" id="detail" />
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>


<?php get_footer('cases'); ?>