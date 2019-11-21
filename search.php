<?php get_header();?>

<?php
global $query_string;
$query_args = explode("&", $query_string);
$search_query = array("post_type" => "post", "category_name" => "blog");
foreach ($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
}
$the_query = new WP_Query($search_query);

?>

<!-- Introdução -->
<div class="container">
    <div class="row">
        <div class="col-7">
            <p>Resultados para:</p>
            <h2 <?php if (is_search()) {echo "class='search-term'";}?>>
                <?php printf(get_search_query());?>
            </h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg" alt="Estúdio La.Bomba"
                class="img-fluid logo-detail" />
        </div>
    </div>
</div>
</header>

<?php if ($the_query->have_posts()): ?>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="row">
                <!-- the loop -->
                <?php while ($the_query->have_posts()): $the_query->the_post();?>

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

                <?php endwhile;?>
                <!-- end of the loop -->
            </div>
        </div>
        <div class="col-md-3 d-none d-md-block">
            <?php get_sidebar();?>
        </div>
    </div>
</div>


<?php wp_reset_postdata();?>

<?php else: ?>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-12 error-search">
            <h5>Não há resultados para essa busca.</h5>
        </div>
        <div class="col-md-3 d-none d-md-block">
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php endif;?>
<?php wp_reset_query();?>


<?php get_footer();?>