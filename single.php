<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

</header>

<section id="blog-text">
    <div class="container" id="text">
        <div class="row">
            <div class="col-12">
                <div class="destaque-post">
                    <div class="destaque-post-image" style="background-image: url(<?php the_post_thumbnail_url()?>)">
                    </div>
                    <div class="destaque-post-info">
                        <a href="<?php site_url()?>/blog">← Voltar</a>
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>

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