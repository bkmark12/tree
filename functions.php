<?php

//  set up and load css file
    function load_css(){
        wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', array(), "1.0", 'all');
        wp_enqueue_style('stylesheet');
    }

    add_action('wp_enqueue_scripts','load_css');
        
// set javascript file  - cannot find/load the file???!
    function script_js(){
        wp_enqueue_script('scrip_java', get_template_directory_uri(). "/main.js", array(), "1.0", true);
    }
    
    add_action('wp_enqueue_scripts','script_js');


// menu 

    register_nav_menus(array(
        'primary' => __('Primary menu'),
        'footer' => __('Footer Menu'),
       )
    );


$image1 = 'data-src="https://littleexplorersplaygroup.co.uk/tree/wp-content/themes/TreeTheme/img/Image_1.png"';
//$image2 = 'data-src="https://littleexplorersplaygroup.co.uk/tree/wp-content/themes/TreeTheme/img/Image_2.png"';

?>

