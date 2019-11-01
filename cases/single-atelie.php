<?php /*
 * Template Name: Case Ateliê
 * Template Post Type: post
 */?>
<?php require 'inc/header-atelie.php';?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<!-- Destaque -->
<section>
    <div class="kraft divider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="detail">
                        <div class="detail-logo">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/logo_detail.png"
                                alt="Ateliê Pretrópolis" class="img-fluid" data-aos="zoom-in" />
                        </div>
                        <div class="detail-info">
                            <p>
                                <b>Diferente</b>, essa foi a palavra predominante no
                                projeto. O Ateliê Petrópolis vem com a proposta de ser
                                diferente de qualquer showroom, colocando inovações,
                                workshops e tendências.
                            </p>
                            <div class="detail-scroll">
                                <div class="seta">
                                    <a href="#construcao">
                                        <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/seta.svg"
                                            alt="Seta" class="img-fluid" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Logo -->
<section class="bg-dark divider-red" id="logo">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-sm-12">
                <div id="construcao">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/construcao.svg"
                        alt="Construção do Logo" class="img-fluid" data-aos="zoom-in" />
                </div>
            </div>
            <div class="row">
                <div class="col-2 d-none d-md-block">
                    <div class="grafismo grafismo-left">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/grafismo.svg"
                            alt="Grafismo" data-aos="fade-right" />
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="identidade">
                        <div class="logo">
                            <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/logo.svg"
                                alt="Ateliê Pretrópolis" class="img-fluid" />
                        </div>
                        <h1>Identidade</h1>
                        <p>
                            A identidade visual está repleta de elementos singulares, o
                            sinal de diferente com um pincel simboliza o
                            <span>“pensamento fora da caixa”</span>, já o tronco simboliza
                            a autenticidade e a história que gritam no contraste proposto
                            na nova marca do Ateliê Petrópolis.
                        </p>
                    </div>
                </div>
                <div class="col-2 d-none d-md-block">
                    <div class="grafismo grafismo-right">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/grafismo.svg"
                            alt="Grafismo" data-aos="fade-left" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="seta">
                    <a href="#aplicacao">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/seta.svg" alt="Seta"
                            class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aplicação -->
<section id="aplicacao">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Aplicação</h2>
                <p>
                    A nossa <span>história</span>, personalidade, identidade, desde o
                    modo de agir ou pensar e até as nossas impressões digitais, são
                    singulares. Partindo desse conceito, utilizamos o grafismo de um
                    tronco de árvore, que representa todo o tempo e história de uma
                    árvore, assim como sua identidade, como se fosse também uma
                    impressão digital.
                </p>
            </div>
            <div class="col-12 pt-5 text-center">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/aplicacao.jpg" alt="Aplicação"
                    class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<!-- Mockups -->
<section id="mockups">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-md-5 col-sm-12">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/atelie_bag.png"
                    alt="Aplicação Bag Ateliê Pretrópolis" class="img-fluid" id="bag" data-aos="fade-right" />
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/atelie_xicara.png"
                    alt="Aplicação Xícara Ateliê Pretrópolis" class="img-fluid" id="xicara" data-aos="zoom-in-up" />
            </div>
            <div class="col-md-5 col-sm-12">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/atelie_envelope.png"
                    alt="Aplicação Envelope Ateliê Pretrópolis" class="img-fluid" id="envelope" data-aos="fade-left" />
            </div>
            <div class="col-12 text-center pt-5">
                <p>
                    Cada projeto de decoração de interiores é uma
                    <span>história diferente</span> a ser contada.
                </p>
            </div>
            <div class="col-12">
                <div class="seta">
                    <a href="#rodape">
                        <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/seta.svg" alt="Seta"
                            class="img-fluid" />
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 pt-5 ">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/atelie_poster.jpg"
                    alt="Aplicação Poster Ateliê Pretrópolis" class="img-fluid" />
            </div>
            <div class="col-md-4 col-sm-12 pt-5 ">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/atelie_placa.jpg"
                    alt="Aplicação Placa Ateliê Pretrópolis" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<!-- Rodapé -->
<section class="bg-dark" id="rodape">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/atelie/logo_grafismo.svg"
                    alt="Ateliê Pretrópolis" class="img-fluid" data-aos="zoom-in-up" />
                <h3>Faça um brinde</h3>
                <h2>Ao <span>diferente</span>!</h2>
            </div>
        </div>
    </div>
</section>

<?php endwhile;endif;?>
<?php wp_reset_query();?>


<?php get_footer('cases');?>