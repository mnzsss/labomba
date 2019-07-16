<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="theme-color" content="#ffffff" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/normalize.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/labomba.min.css" />
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

    <!-- Facebook Pixel Code -->
    <script>
    !(function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) :
                n.queue.push(arguments);
        };

        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";

        n.queue = [];
        t = b.createElement(e);
        t.async = !0;

        t.src = v;
        s = b.getElementsByTagName(e)[0];

        s.parentNode.insertBefore(t, s);
    })(
        window,
        document,
        "script",

        "https://connect.facebook.net/en_US/fbevents.js"
    );

    fbq("init", "438763636979719");

    fbq("track", "PageView");
    </script>

    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=438763636979719&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <?php wp_head(); ?>
</head>

<body class="labomba">
    <!-- Header -->
    <header <?php 
         if ( is_page('contato')  ) { 
            echo "class='contato'";
        } ?>>
        <div class="container">
            <!-- Menu -->
            <div class="row">
                <div class="col-md-12 col-lg-11">
                    <nav class="navbar navbar-dark bg-transparent navbar-expand-md menu">

                        <?php the_custom_logo(); ?>

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