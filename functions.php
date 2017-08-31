<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
//Chargement des feuilles de style & police
    function wpao_theme_styles(){
        // wp_enqueue_style("fontMonserrat_css", 'https://fonts.googleapis.com/css?family=Montserrat');
        wp_enqueue_style("master_css", get_template_directory_uri() . '/assets/css/master.css' );
        wp_enqueue_style("google_css", get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
    }

add_action('wp_enqueue_scripts', 'wpao_theme_styles');
 ?>
