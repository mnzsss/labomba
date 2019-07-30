<?php

// Chamar a tag Title e adicionar os formatos de posts
function labomba_theme_support() {

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'labomba_theme_support');

// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function labomba_render_title() {
        ?>
<title><?php wp_title('|', true, 'right'); ?></title>
<?php
    }
    add_action('wp_head', 'labomba_render_title');
}

// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );

// Definir o tamanho o resumo
add_filter( 'excerpt_length', function($length) {
    return 25;
} ); 


// Vizualizações do Post
function getPostViews($postID){
    $count_key = '_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
function setPostViews($postID) {
    $count_key = '_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Disqus
function disqus_embed($disqus_shortname) {
    global $post;
    
        wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
        
        echo '<div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_shortname = "'.$disqus_shortname.'";
            var disqus_title = "'.$post->post_title.'";
            var disqus_url = "'.get_permalink($post->ID).'";
            var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
        </script>';
    }