<?php 
/* Template Name: Contato */
/* Template Post Type: page */
?>
<?php get_header(); ?>

<div class="container">
    <!-- Introdução -->
    <div class="row introducao">
        <div class="col-md-7 col-12">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/labomba_logo_detail.svg"
                alt="Estúdio La.Bomba" class="img-fluid logo-detail" />
        </div>
        <div class="col-md-6  col-sm-12">
            <h1>Endereço</h1>
            <p>
                <?php the_field('endereco'); ?>
            </p>
            <p><?php the_field('telefone'); ?></p>
        </div>
        <div class="col-md-6 col-sm-12">
            <h3>Contato</h3>
            <p><span>comunicação</span></p>
            <p>
                <a href="mailto:<?php the_field('email-contato'); ?>"><?php the_field('email-contato'); ?></a>
            </p>
            <p><span>novos negócios</span></p>
            <p>
                <a href="mailto:<?php the_field('email-negocios'); ?>"><?php the_field('email-negocios'); ?></a>
            </p>
        </div>
    </div>
</div>

<?php get_footer('contato'); ?>