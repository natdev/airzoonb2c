<?php
define("VERSION","1.0");
function airzoon_files(){
  wp_enqueue_script('bootstrap_js','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',NULL, VERSION, true);
  wp_enqueue_style('normalize',get_theme_file_uri('/css/nomalize.css'),NULL,VERSION,true);
  wp_enqueue_style('bootstrap','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',array('nomalize'),VERSION);
  wp_enqueue_style('header_airzoon',get_theme_file_uri('/css/header.css'),array('nomalize','bootstrap'),VERSION);
  wp_enqueue_style('content_airzoon',get_theme_file_uri('/css/content.css'),array('nomalize', 'bootstrap', 'header_airzoon'),VERSION);
  wp_enqueue_style('footer_airzoon',get_theme_file_uri('/css/footer.css'),array('nomalize', 'bootstrap', 'header_airzoon','content_airzoon'),VERSION);
  wp_enqueue_style('mainstyle',get_theme_file_uri('style.css'), array('nomalize', 'bootstrap', 'header_airzoon','content_airzoon'),VERSION);
}

add_action('wp_enqueue_scripts','airzoon_files');
