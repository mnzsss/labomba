<?php get_header();?>

<div class="container">
    <!-- Introdução -->
    <div class="row introducao">
        <div class="col-md-7 col-12 pt-5">
            <h2>Erooouuu!</h2>
        </div>
        <div class="col-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_detail.svg" alt="Estúdio La.Bomba"
                class="img-fluid logo-detail" />
        </div>
        <div class="col-md-6  col-sm-12">
            <p>A página que você esta procurando não existe ou foi modificada. Tente novamente ou pesquise o que procura.</p>

            <!-- Busca -->
            <?php dynamic_sidebar('busca');?>
        </div>
    </div>
</div>

<?php get_footer('contato');?>