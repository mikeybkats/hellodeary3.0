<?php 
function hellodeary_theme_styles() {
  wp_enqueue_style( 'flexboxgrid', get_template_directory_uri() . '/css/flexboxgrid.min.css' );

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'hellodeary_theme_styles' );

function hellodeary_theme_js() {
  wp_enqueue_script( 'projects_page', get_template_directory_uri() . '/js/projects.js', array('jquery'), '', false );
  wp_enqueue_script( 'mobile_menu', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), '', false );
  wp_enqueue_script( 'chevron', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), '', false );
}
add_action( 'wp_enqueue_scripts', 'hellodeary_theme_js' );

?>
