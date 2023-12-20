<?php 
function universals_files() {
  wp_enqueue_style('universals_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'universals_files');
?>