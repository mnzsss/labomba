<?php /*
 * Template Name: Case Toodoo
 * Template Post Type: post
 */ ?>
<?php require('inc/header-toodoo.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Destaque -->
<main class="text-right">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/toodoo/chamada.png" alt="Toodoo"
        class="img-fluid" />
</main>

<!-- Inovação -->
<section id="inovacao">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>inovação e trabalho duro</h3>
                <h1>é o que nos move</h1>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/toodoo/ilustracao_analise.svg"
                    alt="Ilustração Analise Toodoo" class="img-fluid" id="ilustracao" />
                <h4>identificar, decodificar e evoluir</h4>
            </div>
        </div>
    </div>
</section>

<!-- Explicação -->
<section id="explicacao">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-6 col-sm-12">
                <div id="info">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/toodoo/chamada-explicacao.svg"
                        alt="Juntos transformamos soluções digitais em realidade" class="img-fluid" />
                    <p>
                        Alguns elementos, que aparecem como detalhes vem mostrar a
                        essência da marca que é a transformação. Das ondas ao zig zag,
                        do analógico ao digital, o poder de digitalizar ideias e tornar
                        possível projetos das mentes sonhadoras.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mockups -->
<section id="mockup" class="text-center">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/toodoo/toodoo_poster.jpg" alt="Poster Toodoo"
        class="img-fluid" />
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/toodoo/toodoo_copo_bag.jpg" alt="Poster Toodoo"
        class="img-fluid" />
</section>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php require('inc/footer-cases.php'); ?>