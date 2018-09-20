<?php
define("VERSION","1.0");
function airzoon_files(){
  wp_enqueue_script('bootstrap_js',get_theme_file_uri('/js/bootstrap.bundle.min.js'),NULL, VERSION, true);

  wp_enqueue_style('normalize',get_stylesheet_uri().'/css/normalize.css');
  wp_enqueue_style('bootstrap_airzoon',get_template_directory_uri().'/css/bootstrap.min.css',array('normalize'), VERSION);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i',NULL, VERSION);
  wp_enqueue_style('header_airzoon',get_template_directory_uri().'/css/header.css',array('normalize','bootstrap_airzoon'), VERSION);
  wp_enqueue_style('content_airzoon',get_template_directory_uri().'/css/content.css',array('normalize','bootstrap_airzoon','header_airzoon'),VERSION);
  wp_enqueue_style('footer_airzoon',get_template_directory_uri().'/css/footer.css',array('normalize','bootstrap_airzoon','header_airzoon','content_airzoon'),VERSION);
  wp_enqueue_style('mainstyle',get_stylesheet_uri(),array('normalize','bootstrap_airzoon','header_airzoon','content_airzoon','footer_airzoon'),VERSION);
}

add_action('wp_enqueue_scripts','airzoon_files');




function airzoon_features(){
    $defaults = array(
        'height'      => 119,
        'width'       => 119,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
  add_theme_support('title-tag');
}
add_action('after_setup_theme','airzoon_features');
