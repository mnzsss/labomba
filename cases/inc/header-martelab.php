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
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/labomba-martelab.min.css" />

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

    <?php wp_head('coca'); ?>
</head>

<body>
    <!-- Menu fixo -->
    <div class="menu-fixo bg-dark">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/labomba_logo.svg"
                            alt="Estúdio LaBomba" class="img-fluid" />
                    </a>
                </div>
                <div class="col-md-6">
                    <p class="text-white">
                        Quer ter um projeto FODA ?
                        <a href="https://briefing.estudiolabomba.com/" target="blank">clique aqui,</a>
                    </p>
                </div>
            </div>
        </div>
    </div>