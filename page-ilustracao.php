	<?php
/* Template Name: Ilustração */
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
	            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg"
	                alt="Estúdio La.Bomba" class="img-fluid logo-detail" />
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
	            <div class="col-lg-10 offset-lg-1 text-center">
	                <p>
	                    Dentro das milhares possibilidades de retratarmos algo, seja na
	                    escrita de um livro ou no som de um rio correndo, a arte visual
	                    também mexe com o senso criativo e associativo.
	                </p>
	            </div>
	        </div>
	    </div>
	</section>

	<div class="container" id="explicacao">
	    <div class="row">
	        <div class="col-12 py-5" id="ilustracao">
	            <div class="row">
	                <div class="col">
	                    <img src="<?php bloginfo('template_directory');?>/assets/img/ilustras/sketch.png" alt="Sketch"
	                        class="img-fluid" />
	                </div>

	                <div class="col">
	                    <img src="<?php bloginfo('template_directory');?>/assets/img/ilustras/nankin.png" alt="Nankin"
	                        class="img-fluid" />
	                </div>

	                <div class="col">
	                    <img src="<?php bloginfo('template_directory');?>/assets/img/ilustras/finalizado.png"
	                        alt="Finalizado" class="img-fluid" />
	                </div>
	            </div>
	        </div>
	        <div class="col-12">
	            <p>
	                Assim como quando tentamos ilustrar o trecho de uma música, a
	                ilustração de uma marca ou produto deve trazer a essência e a
	                mensagem daquele segmento. Existem traços mais pesados e grossos,
	                mas também tem os sem contorno e em aquarela.
	            </p>
	        </div>
	    </div>
	</div>

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
        "tag" => "ilustracao",
    ));?>
	                <?php while ($query->have_posts()): $query->the_post();?>

	                <div class="case" data-aos="zoom-in-up">
	                    <a href="<?php the_permalink();?>">
	                        <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));?>
	                    </a>
	                    <h4><?php the_title();?></h4>
	                    <p class="tags"><?php the_tags('', ' + ', '');?></p>
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