<?php
define("VERSION","1.0");
function airzoon_files(){

  wp_enqueue_script('jQuery_3.3.1','//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',NULL, VERSION, true);

  wp_enqueue_script('slick_js',get_theme_file_uri('/js/slick.min.js'),array('jQuery_3.3.1'), VERSION, true);
  wp_enqueue_script('scrollTop_js',get_theme_file_uri('/js/scrollTop.js'),array('jQuery_3.3.1'), VERSION, true);

  wp_enqueue_script('bootstrap_js',get_theme_file_uri('/js/bootstrap.bundle.min.js'),array('jQuery_3.3.1','slick_js'), VERSION, true);
  wp_enqueue_script('carousel',get_theme_file_uri('/js/carousel.js'),array('jQuery_3.3.1','slick_js','bootstrap_js'), VERSION, true);
  wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css');
  wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/fontawesome/css/all.min.css',array('normalize'), VERSION);
  wp_enqueue_style('bootstrap_airzoon',get_template_directory_uri().'/css/bootstrap.min.css',array('normalize','fontawesome'), VERSION);
  wp_enqueue_style('slick_css',get_template_directory_uri().'/css/slick.css',array(), VERSION);
  wp_enqueue_style('slick_theme_css',get_template_directory_uri().'/css/slick-theme.css',array('slick_css'), VERSION);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i',NULL, VERSION);
  wp_enqueue_style('header_airzoon',get_template_directory_uri().'/css/header.css',array('normalize','bootstrap_airzoon'), VERSION);
  wp_enqueue_style('content_airzoon',get_template_directory_uri().'/css/content.css',array('normalize','bootstrap_airzoon','header_airzoon'),VERSION);
  wp_enqueue_style('footer_airzoon',get_template_directory_uri().'/css/footer.css',array('normalize','bootstrap_airzoon','header_airzoon','content_airzoon'),VERSION);
  wp_enqueue_style('mainstyle',get_stylesheet_uri(),array('normalize','bootstrap_airzoon','header_airzoon','content_airzoon','footer_airzoon'),VERSION);
}

add_action('wp_enqueue_scripts','airzoon_files');

/*widgets*/

function airzoon_widgets(){
  register_sidebar(array(
  'name'            =>'Newsletter subcription',
  'id'              =>'airzoon_newsletter',
  'before_widget'  =>'<div class="col-lg-6">',
  'after_widget'    =>'</div>'
));
}

add_action('widgets_init', 'airzoon_widgets');




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
