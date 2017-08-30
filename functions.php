<?php
    function wpao_theme_styles(){
        wp_enqueue_style( "master_css", get_template_directory_uri() . '/assets/css/master.css' );
    }

add_action('wp_enqueue_scripts', 'wpao_theme_styles');
 ?>
