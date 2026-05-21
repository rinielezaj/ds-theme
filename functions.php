<?php
// function add_theme_scripts(){
//     wp_enqueue_style("style",get_stylesheet_url());
//     wp_enqueue_style("slider",get_template_directory_url().'/css/slider.css',false,'1.1','all');
// // dependents
// // in_footer?
//     wp_enqueue_script('script',get_template_directory_url().'/js/script.js/',array("jquery"),"1.1",true);
// }
// add_action('wp_enqueue_scripts','add_theme_scripts');

function ds_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', "Primary Navigation");
}

add_action("init","ds_setup");

wp_nav_menu(array('theme_location'=>'primary'));
?>