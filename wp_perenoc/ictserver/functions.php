<?php
//theme settings
require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';

//dop_default_func
/*
require get_template_directory() . '/includes/custom-header.php';
require get_template_directory() . '/includes/template-tags.php';
require get_template_directory() . '/includes/template-functions.php';
require get_template_directory() . '/includes/customizer.php';
require get_template_directory() . '/includes/jetpack.php';
require get_template_directory() . '/includes/woocommerce.php';*/


//styles
require get_template_directory() . '/includes/enqueue-scripts-styles.php';

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>