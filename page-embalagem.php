<?php
/* Template Name: Embalagem */
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
            <p class="pt-5">
                <?php the_content();?>
            </p>
        </div>
        <div class="col-md-3 seta text-center flutuar">
            <a href="#explicacao">
                <img src="<?php bloginfo('template_directory');?>/assets/img/seta.svg" alt="Viage!"
                    class="img-fluid" /></a>
        </div>
    </div>
</div>
</header>

<!-- Explicação -->
<section id="explicacao">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-10 offset-lg-1 text-center">
                <p>
                    Todos os elementos presentes devem ser intencionalmente pensados
                    para impulsionar a estratégia daquele produto. Quanto melhor seu
                    design, maior a sua chance de vendas.
                </p>
            </div>
            <div class="col-12 col-md-5 py-5">
                <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/embalagem_1.png"
                    alt="Spider Robot" class="img-fluid" />
            </div>
            <div class="col-12 col-md-7 py-5">
                <p>
                    "Implementar esta abordagem no desenvolvimento de embalagens é
                    relativamente simples. Em primeiro lugar, deve-se considerar o
                    público-alvo do seu produto: são consumidores que estariam
                    dispostos a pagar mais por um envase diferenciado? Quais são suas
                    preferências e valores morais? [...]"
                </p>
                <p>
                    "Experimentar novas ideias de cores, formatos e materiais para
                    rótulos e embalagem é outra das vantagens que o design thinking
                    oferece, e pode trazer uma vantagem no posicionamento de marca,
                    especialmente entre o público-alvo de alto poder aquisitivo."
                </p>
                <span>do Livro sobre Design thinking, de
                    <a href="https://www.amazon.com.br/Design-thinking-Tim-Brown/dp/853523862X" target="blank"
                        class="link">Tim Brown</a>
                </span>
            </div>
            <div class="col-12">
                <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/embalagem_2.png"
                    alt="tiranossauro Attack" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<?php endwhile;endif;?>
<?php wp_reset_query();?>

<!-- Portfólio -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="card-columns">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-5 col-sm-12">
                            <h4>portfólio</h4>
                        </div>
                        <div class="col-lg-7 col-sm-12">
                            <p class="chamada">
                                A gente <span>acredita</span> no que te faz
                                <span>crescer</span>
                            </p>
                        </div>
                    </div>
                </div>

                <?php $query = new WP_Query(
    array("post_type" => "any",
        "tag" => "embalagem",
    ));?>
                <?php while ($query->have_posts()): $query->the_post();?>
                <div class="card">
                    <div class="case" data-aos="zoom-in-up">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
                        </a>
                        <h4><?php the_title();?></h4>
                        <p class="tags"><?php the_tags('', ' + ', '');?></p>
                    </div>
                </div>
                <?php endwhile;?>
                <?php wp_reset_query();?>

                <!-- Final -->
                <div class="card" data-aos="zoom-in-up">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/seta_portfolio.svg"
                        class="img-fluid detail-seta" alt="Seta" />
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>