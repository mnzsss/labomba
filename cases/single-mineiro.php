<?php /*
 * Template Name: Case Mineiro
 * Template Post Type: post
 */ ?>
<?php require('inc/header-mineiro.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main class="d-none d-md-block">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/mineiro/embalagens_mineiro.png"
        alt="Embalagens de Pão de Queijo Mineiro" class="img-fluid" style="width: 100vw;" />
</main>

<!-- Embalagens -->
<section id="embalagens">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/mineiro/mineiro_pao_de_queijo_gourmet_cheese_rolls.png"
                    alt="Embalagem de Pão de Queijo Mineiro" class="img-fluid " data-aos="fade-right" />
            </div>
            <div class="col-md-7 offset-md-1 col-sm-12">
                <h1>Feito para quem tem saudades de casa!</h1>
                <p>
                    A linha de pão de queijo Mineiro, é vendida nos Estados Unidos,
                    porém tem como público-alvo brasileiros que residem há algum tempo
                    por lá, mas também tinha que ser percebida pelo publico
                    estrangeiro. Seguindo o que espera de um produto brasileiro, nos
                    focamos em colocar cores vibrantes, com grafismos festivos, assim
                    dando aquele toque brasileiro para ser identificado da devida
                    forma.
                </p>
            </div>
        </div>
        <div class="row" id="pao-de-queijo">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/mineiro/mineiro_pao_de_queijo_gourmet_cheese_rolls.png"
                    alt="Embalagem de Pão de Queijo Mineiro" class="img-fluid" data-aos="fade-up" />
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/mineiro/mineiro_pao_de_queijo_gourmet_cheese_rolls_2.png"
                    alt="Embalagem de Pão de Queijo Mineiro" class="img-fluid" data-aos="fade-up" />
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/mineiro/mineiro_pao_de_queijo_gourmet_cheese_rolls_3.png"
                    alt="Embalagem de Pão de Queijo Mineiro" class="img-fluid" data-aos="fade-up" />
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php require('inc/footer-cases.php'); ?>