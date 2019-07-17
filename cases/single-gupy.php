<?php /*
 * Template Name: Case Gupy
 * Template Post Type: post
 */ ?>
<?php require('inc/header-gupy.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Conceito -->
<section id="conceito">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 col-md-1 offset-md-1 offset-lg-0 pb-5">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_conceito.svg"
                    alt="Construção do Logotipo da Gupy" class="img-fluid" />
            </div>
        </div>
        <div class="row" id="text">
            <h1>Conceito</h1>
            <p>
                Ao analisarmos a necessidade, percebemos que havia repetidamente algumas
                palavras que davam forma ao aplicativo. Entre elas: inteligência
                artificial, assertividade, pesquisa e conexão de candidatos com os
                contratantes. <br />
                Seguimos um caminho similar ao proposto pelo APP, um caminho assertivo,
                seguro e inovador.
            </p>
        </div>
    </div>
</section>

<!-- Construção e Explicação da Logomarca -->
<section id="explicacao">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_explicacao_construcao_logo.svg"
                    alt="Explicação da Logomarca" class="img-fluid" />
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy.svg" alt="Gupy"
                    class="img-fluid" id="logo" />
                <p class=" text-left">
                    Ilustramos a inteligência artificial como um robô amigável, passando a
                    a impressão de facilidade através da tecnologia. Com elementos
                    abordados no briefing, criamos o “Gupy”, mais do que um mecanismo de
                    busca ou um banco de dados, um amigo, um assistente! O conceito de
                    assistente é utilizado por gigantes como Apple, Microsoft e Google.
                    Esse assistente vai facilitar a vida dos departamentos de RH e
                    simplificar os processos de contrata&ccedil;ão.
                </p>

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_cores.svg"
                    alt="Cores Gupy" class="img-fluid pb-4" width="800" />

                <p>
                    Utilizamos o verde, de disponibilidade, o azul de confiança e o
                    laranja de energia e dinamismo! :)
                </p>
            </div>
            <div class="col-12">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_logo_grid.svg"
                    alt="Gupy Grid" class="img-fluid" id="grid" />
            </div>
        </div>
    </div>
</section>

<!-- Mockup -->
<section id="mockup">
    <div class="container">
        <div class="row">
            <!-- Caneca, Cartão de Visita e Bottom  -->
            <div class="col-12 col-md-6">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_mockup_caneca_cartao_bottom.png"
                    alt="Caneca, Cartão de Visita e Bottom personalizados da Gupy" class="img-fluid" />
            </div>

            <!-- Mochila -->
            <div class="col-12 col-md-6">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_mockup_mochila.png"
                    alt="Mochila personalizada da Gupy" class="img-fluid" />
            </div>

            <!-- Aplicativo -->
            <div class="col-12">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_mockup_aplicativo.png"
                    alt="Aplicativo da Gupy" class="img-fluid" />
            </div>

            <!-- Folder -->
            <div class="col-12 col-md-6">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_mockup_folder.png"
                    alt="Folder da Gupy" class="img-fluid pt-5 mt-5" />
            </div>

            <!-- Sketchbook -->
            <div class="col-12 col-md-6">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_mockup_sketchbook.png"
                    alt="Sketchbook da Gupy" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="text-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/cases/gupy/gupy_personagem.svg"
            alt="Gupy Personagem" class="img-fluid" width="200" />
    </div>
</footer>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>


<?php get_footer('cases'); ?>