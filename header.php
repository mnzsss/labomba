<!doctype html>
<html <?php language_attributes();?>>

<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="theme-color" content="#000" />
    <meta name="msapplication-TileColor" content="#000" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/labomba.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129826334-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-129826334-1");
    </script>

    <?php wp_head();?>
</head>

<body class="labomba">
    <!-- Header -->
    <header <?php if (is_page('contato')) {echo "class='contato'";}?>
        <?php if (is_page('blog')) {echo "class='blog'";}?>
        <?php if (is_single()) {echo "class='single-post'";}?><?php if (is_category() or is_search()) {echo "class='category'";}?>>
        <div class="container">
            <!-- Menu -->
            <div class="row">
                <div class="col-md-12 col-lg-11">
                    <nav class="navbar navbar-dark bg-transparent navbar-expand-md menu">

                        <?php the_custom_logo();?>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="cta">
                                <div class="toggle-btn type17"></div>
                            </div>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url(); ?>#servicos">serviços </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url(); ?>#portfolio">portfólio</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url(); ?>/contato">contato</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url(); ?>/blog">blog</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-1 justify-content-end d-none d-lg-block" id="infos">
                    <ul class="social">
                        <li>
                            <a href="https://www.instagram.com/estudio.labomba/" target="blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.behance.net/estudiolabomba" target="blank">
                                <i class="fab fa-behance"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>