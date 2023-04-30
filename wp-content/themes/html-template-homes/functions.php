<?php
//this function here takes care of handling the assets with enqueue
function softuni_assets(){
wp_enqueue_style('html-template-homes',get_stylesheet_directory_uri() . '/assets/css/master.css', array(), '0.1.2');
}
add_action('wp_enqueue_scripts', 'softuni_assets'); 