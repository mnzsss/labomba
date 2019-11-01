<?php /*
 * Template Name: Case MarteLab
 * Template Post Type: post
 */?>
<?php require 'inc/header-martelab.php';?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<!-- Destaque -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 pr-5">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/texto.svg"
                    alt="Marte o quê ?" class="img-fluid" id="logo" />
            </div>
            <div class="col-md-6 col-sm-12">
                <h1>
                    Sabemos que resolver problemas de T.I.é um trabalho de outro
                    mundo.
                </h1>
                <br />
                <p>
                    E o que seria melhor que Marte, espaço sideral, astronautas?<br />
                    Marte é um planeta que contém bastante ferro, o elemento químico
                    presente em ferramentas como máquinas, veículos de transporte...
                    <br />
                    uma infinidade de outros objetos. Assim como a maioria provoca
                    ações, Marte carrega um caráter energético, tornando a tecnologia
                    uma evolução de outro planeta. Seu nome expressa ambição,
                    criatividade, comunicação e entusiasmo.
                </p>
            </div>
        </div>
    </div>
</main>

<!-- Seta -->
<div id="seta" class="text-center" data-aos="fade-down">
    <a href="#astronauta"><img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/seta.svg"
            alt="Navegue!" class="img-fluid" /></a>
</div>

<!-- Explicação -->
<section id="explicacao">
    <!-- Logo -->
    <div class="container">
        <div class="row" id="logo">
            <div class="col-12 text-center">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/martelab_logo.svg"
                    alt="MarteLab T.I" class="img-fluid" />
            </div>
        </div>
    </div>

    <!-- Astronauta -->
    <section id="astronauta">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/astronauta.png"
                        alt="Astronauta MarteLab T.I" class="img-fluid" id="personagem" data-aos="zoom-in-up" />
                    <h2>tecnologia de outro planeta, para a sua empresa.</h2>
                    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/martelab_logo.svg"
                        alt="MarteLab T.I" class="img-fluid" id="logo" />
                </div>
            </div>
        </div>
    </section>

    <!-- Vídeo -->
    <section id="video">
        <div class="container">
            <div class="row" data-aos="zoom-out-down">
                <div class="col-md-6 col-sm-12">
                    <p>
                        Para alinhar a expectativa desse projeto com o conceito de “T.I.
                        de outro mundo”, representamos a busca pela excelência nesse
                        setor pela figura de um astronauta. Que inclusive pode se tornar
                        protagonista da marca ao instruir e se comunicar com os futuros
                        clientes.
                    </p>
                    <p>
                        A construção do personagem foi feito em paper cutting, processo
                        feito por recortes e colagens em camadas que trazem profundidade
                        ao desenho.
                    </p>
                    <p>Dá play no vídeo pra entender um pouco mais:</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video controls="true" class="embed-responsive-item"
                            poster="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/poster-video.png">
                            <source src="<?php bloginfo('template_directory');?>/assets/videos/martelab.mp4"
                                type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- Mockups -->
<section id="mockups">
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/mockups/martelab_copo1x.png"
        alt="Copo MarteLab" class="img-fluid" id="copo" />
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/mockups/caderno.png"
        alt="Caderno MarteLab" class="img-fluid" />

    <!-- Cartão -->
    <div id="cartao">
        <div class="container">
            <div class="row" data-aos="zoom-in-up">
                <div class="col-md-8 col-sm-12 offset-md-2">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/martelab/cartao.svg"
                        alt="Cartão MarteLab" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile;endif;?>
<?php wp_reset_query();?>


<?php get_footer('cases');?>