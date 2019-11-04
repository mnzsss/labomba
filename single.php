<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<!-- Introdução -->
<div class="container" id="blog-post">
    <div class="row">
        <div class="col-md-7 col-12">
            <h2><?php the_title();?></h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg" alt="Estúdio La.Bomba"
                class="img-fluid logo-detail" />
        </div>
        <div class="col-md-8 col-sm-12" id="info">
            <p class="pt-3">
                <?php the_excerpt();?>
            </p>
            <a href="/blog">&larr; Voltar</a>
        </div>
        <div class="col-md-3 seta text-center flutuar">
            <a href="#text">
                <img src="<?php bloginfo('template_directory');?>/assets/img/seta.svg" alt="Viage!" class="img-fluid" />
            </a>
        </div>
    </div>
</div>
</header>

<section id="blog-text">
    <div class="container" id="text">
        <div class="row">
            <div class="col-md-9 col-12 conteudo">
                <?php the_content();?>

                <div class="comentarios py-5 text-center">
                    <div class="fb-comments"
                        data-href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"
                        data-width="800" data-numposts="5"></div>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>

<?php endwhile;endif;?>
<?php wp_reset_query();?>

<?php get_footer();?>