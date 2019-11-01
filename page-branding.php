<?php
/* Template Name: Branding */
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
            <a href="#explicacao">
                <img src="<?php bloginfo('template_directory');?>/assets/img/seta.svg" alt="Viage!"
                    class="img-fluid" /></a>
        </div>
    </div>
</div>
</header>

<!-- Branding Explicação -->
<section id="branding">
    <div class="container text-center">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <p>brand = <span>marca</span> / ing = <span>ação</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Explicação -->
<section id="explicacao">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <p>
                    Vamos lá, as marcas existem porque as pessoas seguem e defendem os
                    mesmos ideais, tem os mesmos costumes, falam a mesma língua.
                </p>
                <p>
                    Uma marca, cria um círculo social, onde ela fala, se veste e se
                    apresenta de uma certa maneira. E nunca se esquecendo de se
                    reinventar.
                </p>
            </div>
            <div class="col-md-6 col-12">
                <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/branding_1.jpg"
                    alt="Ateliê Petrópolis" class="img-fluid" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/branding_2.png" alt="El Kalango"
                    class="img-fluid" />
            </div>
            <div class="col-md-6 col-12">
                <p>
                    “As melhores marcas representam algo importante: uma grande ideia,
                    um posicionamento estratégico, um conjunto de valores bem
                    definido, uma voz que se destaca.”
                </p>
                <span>do livro Design de Identidade da Marca, de
                    <a href="https://www.saraiva.com.br/design-de-identidade-da-marca-3-ed-4025308.html" target="blank"
                        class="link">Alina Wheeler</a></span>

                <p class="pt-5">
                    “Muito mais do que um nome e uma logo, uma marca é a promessa de
                    uma organização a um cliente para oferecer o que a marca
                    representa não apenas em termos de benefícios funcionais, mas
                    também benefícios emocionais, auto-expressivos e sociais.”
                </p>
                <span>do livro on Branding, de
                    <a href="https://www.livrariacultura.com.br/p/livros/administracao/marketing/on-branding-5173415"
                        target="blank" class="link">David Aaker</a></span>
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
        "tag" => ["branding", "Identidade Visual"],
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