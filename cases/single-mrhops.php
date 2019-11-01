<?php /*
 * Template Name: Case Mr. Hops
 * Template Post Type: post
 */?>
<?php require 'inc/header-mrhops.php';?>

<?php if (have_posts()): while (have_posts()): the_post();?>

<!-- Header -->
<section id="destaque" class="text-center">
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_header.jpg" alt="Mr. Hops"
        class="img-fluid" />
</section>

<!-- Mr. Hops -->
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Mr. Hops</h1>
                <p>
                    Um criador de lhamas crazzzzy! <br />
                    Mr. Hops preza pela tranquilidade, seguida de uns bons goles de
                    cerveja. Foi dai que decidiu ir atrás de sua plantação de lúpulo e
                    seu grupo de lhamas - e ai vocês me perguntam “por que lhamas?” e
                    eu lhes respondo “por que não lhamas?”.
                    <br />
                    No meio dessa loucura toda, de cervejas artesanais e passeios
                    pelos campos, cada lhama desenvolveu uma personalidade única. Foi
                    então que ele teve a ideia de homenagear suas lhamas colocando
                    seus nomes nas cervejas que produzia, segundo as características e
                    sabores de cada uma.
                </p>
            </div>
            <div class="col-12 col-md-6 text-center">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_personagem.svg"
                    alt="Mr. Hops Personagem" class="img-fluid" width="400" />
            </div>
        </div>
    </div>
</section>

<!-- Lhamas -->
<section class="text-center">
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_personagens.jpg"
        alt="Lhamas Mr. Hops" class="img-fluid" />
</section>

<!-- Explicação das Lhamas -->
<section>
    <div class="container text-left">
        <div class="row">
            <!-- Amarildo -->
            <div class="col-6 col-md-3 personagem">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_lhama_amarildo.svg"
                    alt="Lhama Amarildo - Mr. Hops" class="img-fluid" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_personagens_detail.svg"
                    alt="Mr. Hops" class="img-fluid py-3" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_nome_amarildo.svg"
                    alt="Lhama Amarildo - Mr. Hops" class="img-fluid" />
                <p class="pt-3">
                    Amarildo é a lhama mais insana da fazenda e sabe o que ele curte
                    mais ainda? Lúpulo Amarillo. Toda santa vez que ele escapa, lá se
                    vai minha plantação de lúpulo e no fim do dia está ele lá fingindo
                    que nada aconteceu. <br />
                    As vezes acho que o Amarildo poderia se chamar Aparecido, ele é o
                    centro das atenções e adora uma piadinha ácida.
                </p>
            </div>
            <!-- Iris -->
            <div class="col-6 col-md-3 personagem">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_lhama_iris.svg"
                    alt="Lhama Iris - Mr. Hops" class="img-fluid" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_personagens_detail.svg"
                    alt="Mr. Hops" class="img-fluid py-3" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_nome_iris.svg"
                    alt="Lhama Iris - Mr. Hops" class="img-fluid" />
                <p class="pt-3">
                    Iris é a lhama paz e amor. Gosta mesmo é do aroma caramelizado
                    tostado do malte e da diversidade dos grãos. Sua alimentação é
                    balanceada entre mais de quatro tipos de malte, tostados e crus.
                    <br />
                    Uma lhama hippie, que prefere sombra e água fresca do que andar
                    nas plantações de lúpulo. Mas quem disse que ela não dá umas
                    escapadas?
                </p>
            </div>
            <!-- Wesley -->
            <div class="col-6 col-md-3 personagem">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_lhama_wesley.svg"
                    alt="Lhama Wesley - Mr. Hops" class="img-fluid" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_personagens_detail.svg"
                    alt="Mr. Hops" class="img-fluid py-3" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_nome_wesley.svg"
                    alt="Lhama Wesley - Mr. Hops" class="img-fluid" />
                <p class="pt-3">
                    Wesley é a verdadeira lhama da galera com seu espírito jovem. Em
                    dias quentes, adora se refrescar nos lagos da fazenda com os
                    amigos e não perde um rolê nas fazendas ao lado à procura de
                    banana e cravo. Tudo culpa dos aromas.
                </p>
            </div>
            <!-- Elisabete -->
            <div class="col-6 col-md-3 personagem">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_lhama_elisabete.svg"
                    alt="Lhama Elisabete - Mr. Hops" class="img-fluid" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_personagens_detail.svg"
                    alt="Mr. Hops" class="img-fluid py-3" />
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/personagens/mrhops_nome_elisabete.svg"
                    alt="Lhama Elisabete - Mr. Hops" class="img-fluid" />
                <p class="pt-3">
                    Elisabete é uma lhama experiente. Adora andar pela fazenda atrás
                    dos melhores lúpulos ingleses e sabe que o malte é fundamental
                    para a sofisticação. A cor de cobre, o aroma e as suaves notas de
                    caramelo a encantam.
                    <br />
                    Uma lhama coroa que adora o perfeito equilíbrio entre amargor e a
                    cremosidade do malte. Ela é amiga de longa data e sempre bem
                    recebida pelos recém-chegados.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Logo -->
<section class="text-center">
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops.svg" alt="Mr. Hops"
        class="img-fluid" width="300" />
</section>

<!-- Mockups -->
<section id="mockup" class="text-center">
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_mockup_poster.jpg"
        alt="Mr. Hops Mockups Poster" class="img-fluid" />
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_mockup_case_cerveja.jpg"
        alt="Mr. Hops Mockups Case Cerveja" class="img-fluid" />
    <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_mockup_embalagem_cerveja.jpg"
        alt="Mr. Hops Mockups Embalagem Cerveja" class="img-fluid" />
</section>

<!-- Rótulos -->
<section id="rotulos">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h2>Rótulos</h2>
            </div>

            <!-- Amarildo -->
            <div class="col-12 col-md-6 pb-4">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/rotulos/amarildo.jpg"
                    alt="Rótulo do Amarildo IPA" class="img-fluid" />
            </div>

            <!-- Elisabete -->
            <div class="col-12 col-md-6">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/rotulos/elisabete.jpg"
                    alt="Rótulo do Elisabete ESB" class="img-fluid" />
            </div>

            <!-- Iris -->
            <div class="col-12 col-md-6 pt-4">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/rotulos/iris.jpg"
                    alt="Rótulo do Iris Irish Red Ale" class="img-fluid" />
            </div>

            <!-- Wesley -->
            <div class="col-12 col-md-6 pt-4">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/rotulos/wesley.jpg"
                    alt="Rótulo do Wesley Weizen" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<!-- Cartela -->
<section id="cartela">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h2>Cartela</h2>
                <p><strong>frente / verso</strong></p>
            </div>
        </div>
        <div class="col-12">
            <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_cartela_cerveja.png"
                alt="Cartela de Cervejas Mr. Hops" class="img-fluid" />
        </div>
    </div>
</section>

<!-- Camiseta e Cartão de Visita -->
<section id="camiseta-cartao">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_camiseta.png"
                    alt="Camiseta da Cervejaria Mr. Hops" class="img-fluid" />
            </div>
            <div class="col-12 col-md-6 text-center">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_cartao_visita.jpg"
                    alt="Cartão de Visita da Cervejaria Mr. Hops" class="img-fluid" width="370" />
            </div>
            <div class="divider"></div>
        </div>

        <!-- Social Media -->
        <div class="row pt-5" id="social-media">
            <div class="col-12 col-md-6 post pb-5">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_social_media_2.png"
                    alt="Postagem para Rede Social da Cervejaria Mr. Hops" class="img-fluid" />
            </div>
            <div class="col-12 col-md-6 post pb-5">
                <img src="<?php bloginfo('template_directory');?>/assets/img/cases/mrhops/mrhops_social_media_1.png"
                    alt="Postagem para Rede Social da Cervejaria Mr. Hops" class="img-fluid" />
            </div>
        </div>
    </div>
</section>


<?php endwhile;endif;?>
<?php wp_reset_query();?>


<?php get_footer('cases');?>