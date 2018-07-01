<?php
  //CSS enqueuing
function AllCalGolf_script_enqueue() {
  wp_enqueue_style('index-style', get_template_directory_uri() . '/css/AllCalGolf.css', array(), '0.0.1', 'all');
  wp_enqueue_style('inventory-style', get_template_directory_uri() . '/css/inventory.css', array(), '0.0.1', 'all');
  wp_enqueue_style('rentals-style', get_template_directory_uri() . '/css/rentals.css', array(), '0.0.1', 'all');
  wp_enqueue_style('post-page-style', get_template_directory_uri() . '/css/post-page.css', array(), '0.0.1', 'all');
  wp_enqueue_style('header-style', get_template_directory_uri() . '/css/header.css', array(), '0.0.1', 'all');
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css', array(), '0.0.1', 'all');
  wp_enqueue_style('parts-page-style', get_template_directory_uri() . '/css/parts.css', array(), '0.0.1', 'all');

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



/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
