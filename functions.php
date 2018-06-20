<?php
  //CSS enqueuing
function AllCalGolf_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/AllCalGolf.css', array(), '0.0.1', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/AllCalGolf.js', array( 'jquery' ), '0.0.1', true);
}

function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}

  //Basic enqueuing of jQuery and js script
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
add_action('wp_enqueue_scripts', 'AllCalGolf_script_enqueue');
add_theme_support( 'post-thumbnails' );

  //Remove all inline styles
add_filter('the_content', function( $content ){
    $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
    return $content;
}, 20);
 ?>
