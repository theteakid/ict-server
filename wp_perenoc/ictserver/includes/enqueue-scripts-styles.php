<?php

add_action( 'wp_enqueue_scripts', function()  {


    //CSS
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
    //wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'dropdown', get_template_directory_uri() . '/assets/css/dropdown.css');



    //JS
    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true );
    //wp_enqueue_script( 'cart', get_template_directory_uri() . '/assets/js/cart.js', array(), '1.0.0', true );
    wp_enqueue_script( 'm_index', get_template_directory_uri() . '/assets/js/m_index.js', array(), '1.0.0', true );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/js/dropdown.js', array(), '1.0.0', true );
    wp_enqueue_script( 'catalogmenu', get_template_directory_uri() . '/assets/js/catalogmenu.js', array(), '1.0.0', true );
    wp_enqueue_script( 'imgslider', get_template_directory_uri() . '/assets/js/imgslider.js', array(), '1.0.0', true );
});
?>