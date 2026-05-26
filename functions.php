<?php
// function add_theme_scripts(){
//     wp_enqueue_style("style",get_stylesheet_url());
//     wp_enqueue_style("slider",get_template_directory_url().'/css/slider.css',false,'1.1','all');
// // dependents
// // in_footer?
//     wp_enqueue_script('script',get_template_directory_url().'/js/script.js/',array("jquery"),"1.1",true);
// }
// add_action('wp_enqueue_scripts','add_theme_scripts');

// function ds_setup(){
//     add_theme_support('menus');
//     register_nav_menu('primary', "Primary Navigation");
// }

// add_action("init","ds_setup");

// wp_nav_menu(array('theme_location'=>'primary'));
?>

<?php
    add_theme_support('post-thumbnails');

    function defino_bs_styles(){
        wp_enqueue_style("bootstrap", get_template_directory_uri().'./css/bootstrap.min.css');
        wp_enqueue_style("core",get_template_directory_uri().'./style.css');
    }

    add_action('wp_enqueue_scripts','defino_bs_styles');

    function themebs_scripts(){
        wp_enqueue_scripts('bootstrap', get_template_directory_uri().'.js/bootstrap.min.js',
        array("jquery"));
    }
    
    add_action('wp_enqueue_scripts','themebs_scripts');
?>