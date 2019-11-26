<?php get_header();?>
<!-- Loader -->
<?php if (!wp_is_mobile()) {?>
<div id="loader">
    <img src="<?php bloginfo('template_directory');?>/assets/img/preloader.gif" width="30%" alt="Carregando..." />
</div>
<?php }?>

<!-- Introdução -->
<div class="container">
    <div class="row">
        <div class="col-7">
            <h2>solução</h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg" alt="Estúdio La.Bomba"
                class="img-fluid logo-detail" />
        </div>
        <div class="col-md-8 col-sm-12" id="info">
            <h1>Através do Design</h1>
            <p class="pt-3">
                Criamos conceitos, buscamos estratégias e formas de linguagem,
                acreditando sempre que sua marca tem que se posicionar de acordo
                com o seu propósito.
            </p>
            <p>Como os seus clientes enxergam você?</p>
            <p>
                Se o contexto da sua comunicação é um transtorno de personalidade,
                isso com certeza não vai atrair os clientes certos.
            </p>
            <p>
                Então, chega mais. Somos pirados no que fazemos, temos mentes
                diferentes que explodem em cada projeto trazendo um resultado
                foda!
            </p>
        </div>
        <div class="col-md-3 seta text-center flutuar">
            <a href="#servicos">
                <img src="<?php bloginfo('template_directory');?>/assets/img/seta.svg" alt="Viage!"
                    class="img-fluid" /></a>
        </div>
    </div>
</div>
</header>

<!-- Serviços -->
<section id="servicos">
    <div class="container" data-aos="zoom-in-down">
        <div class="row">
            <div class="offset-lg-1 col-lg-11">
                <h4>serviços</h4>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-3 col-md-4">
                <div class="servico">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/branding_icon.svg"
                        alt="Branding - Estúdio LaBomba" class="img-fluid" />
                    <p>
                        Gerir uma marca é um processo contínuo, e até mesmo complexo, em
                        busca de identificação e conexão com o consumidor.
                    </p>
                    <a href="branding" class="link">Branding</a>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-3 col-md-4">
                <div class="servico">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/ilustracao_icon.svg"
                        alt="Ilustração - Estúdio LaBomba" class="img-fluid" />
                    <p>
                        Sabe aquelas capas de filmes transformadas em ilustrações, que
                        trazem os personagens e alguns elementos do próprio filme?
                    </p>
                    <a href="ilustracao" class="link">Ilustração</a>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-3 col-md-4">
                <div class="servico">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/servicos/embalagem_icon.svg"
                        alt="Design de Embalagem - Estúdio LaBomba" class="img-fluid" />
                    <p>
                        Se as pessoas, em geral, julgam o livro pela capa, com as
                        embalagens não seria diferente.
                    </p>
                    <a href="embalagem" class="link">Design de <br />
                        Embalagem</a>
                </div>
            </div>
        </div>
    </div>
</section>

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

                <?php
$args = array('category_name' => 'case');
$the_query = new WP_Query($args);
?>
                <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post();?>
                <div class="card">
                    <div class="case" data-aos="zoom-in-up">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
                        </a>
                        <h4><?php the_title();?></h4>
                        <p class="tags"><?php the_tags('', ' + ', '');?></p>
                    </div>
                </div>
                <?php endwhile;endif;?>
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