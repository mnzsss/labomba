<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Introdução -->
<div class="container" id="blog-post">
    <div class="row">
        <div class="col-md-7 col-12">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/labomba_logo_detail.svg"
                alt="Estúdio La.Bomba" class="img-fluid logo-detail" />
        </div>
        <div class="col-md-8 col-sm-12" id="info">
            <p class="pt-3">
                <?php the_excerpt(); ?>
            </p>
            <?php the_breadcrumb(); ?>
        </div>
        <div class="col-md-3 seta text-center flutuar">
            <a href="#explicacao">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/seta.svg" alt="Viage!"
                    class="img-fluid" /></a>
        </div>
    </div>
</div>
</header>

<section id="blog-text">
    <div class="container">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
        <div class="col-12 comentarios">
            <?php disqus_embed('estudio-la-bomba'); ?>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>