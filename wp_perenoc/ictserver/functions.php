<?php


add_action( 'wp_enqueue_scripts', function()  {


    //CSS
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'dropdown', get_template_directory_uri() . '/assets/css/dropdown.css');



    //JS
 //   wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});

?>