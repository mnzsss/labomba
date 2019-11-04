<?php get_header();?>

<!-- Introdução -->
<div class="container">
    <div class="row">
        <div class="col-7">
            <p>Categoria:</p>
            <h2><?php single_cat_title();?></h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg" alt="Estúdio La.Bomba"
                class="img-fluid logo-detail" />
        </div>
    </div>
</div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="row">
                <?php $args = array('category_name' => 'blog');
$the_query = new WP_Query($args);?>
                <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post();?>
                <div class="col-md-4 col-12">
                    <div class="post">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
                        </a>
                        <a href="<?php the_permalink();?>">
                            <h4><?php the_title();?></h4>
                        </a>
                        <p><?php the_excerpt();?></p>
                    </div>
                </div>
                <?php endwhile;endif;?>
                <?php wp_reset_query();?>
            </div>
        </div>
        <div class="col-md-3 d-none d-md-block">
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer();?>