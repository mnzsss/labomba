<?php

// Chamar a tag Title e adicionar os formatos de posts
function labomba_theme_support()
{
    // Definir as miniaturas dos posts
    add_theme_support('post-thumbnails');

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar o logotipo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'labomba_theme_support');

// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function labomba_render_title()
    {
        ?>
<title><?php wp_title('|', true, 'right');?></title>
<?php
}
    add_action('wp_head', 'labomba_render_title');
}

// Definir o tamanho o resumo
add_filter('excerpt_length', function ($length) {
    return 25;
});

// Formulário de Busca
register_sidebar($args = array(
    'name' => __('Busca', 'busca'),
    'id' => 'busca',
    'before_widget' => '<div class="busca">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

// Sidebar Widgets
register_sidebar($args = array(
    'name' => __('Sidebar', 'sidebar'),
    'id' => 'sidebar',
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
));