<?php
/* Template Name: Blog */
/* Template Post Type: page */
?>
<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<!-- Introdução -->
<div class="container">
    <div class="row">
        <div class="col-7">
            <h2><?php the_title();?></h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg" alt="Estúdio La.Bomba"
                class="img-fluid logo-detail" />
        </div>
        <div class="col-md-8 col-sm-12" id="info">
            <p class="pt-3">
                <?php the_content();?>
            </p>
        </div>
        <div class="col-md-3 seta text-center flutuar">
            <a href="#blog-postagens">
                <img src="<?php bloginfo('template_directory');?>/assets/img/seta.svg" alt="Viage!"
                    class="img-fluid" /></a>
        </div>
    </div>
</div>
</header>

<!-- Postagens -->
<section id="blog-postagens">
    <div class="container">
        <div class="row">
            <?php query_posts('cat=2');?>
            <?php if (have_posts()): while (have_posts()): the_post();?>
            <div class="col-md-4 col-12">
                <div class="post" data-aos="zoom-in-up">
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
                    </a>
                    <a href="<?php the_permalink();?>">
                        <h4><?php the_title();?></h4>
                    </a>
                    <p><?php the_excerpt();?></p>
                    <span><i class="fas fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> </span> |
                    <time datetime="<?php the_time('c');?>">
                        <i class="far fa-calendar-alt"></i> <?php the_time('d/m/Y');?>
                    </time>
                </div>
            </div>
            <?php endwhile;endif;?>
            <?php wp_reset_query();?>
        </div>
    </div>
</section>

<?php endwhile;endif;?>
<?php wp_reset_query();?>

<?php get_footer();?>