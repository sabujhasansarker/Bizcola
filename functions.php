<?php

/**
 * @Author: Sabuj
 * @Date:   2019-10-22 16:28:35
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-22 12:26:10
 */
// include_once 'inc/wp-widget.php';
include_once 'wp-widget.php';
include_once 'inc/option.php';
include 'inc/coustom_post.php';
function bizcola() {
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri().'/assets/css/animate.css', array(), '1', 	'all' );

	wp_enqueue_style( 'ALL', get_stylesheet_directory_uri().'/assets/css/all.min.css', array(), '1', 	'all' );
	wp_enqueue_style( 'carousel', get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1', 	'all' );
	wp_enqueue_style( 'fancybox', get_stylesheet_directory_uri().'/assets/css/fancybox.min.css', array(), '1', 	'all' );
	wp_enqueue_style( 'sm-clean', get_stylesheet_directory_uri().'/assets/css/sm-clean.css', array(), '1', 	'all' );
	wp_enqueue_style( 'sm-core', get_stylesheet_directory_uri().'/assets/css/sm-core.css', array(), '1', 	'all' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css', array(), '1', 	'all' );
	wp_enqueue_style( 'default', get_stylesheet_directory_uri().'/assets/css/default.css', array(), '1', 	'all' );
	wp_enqueue_style( 'bizcola', get_stylesheet_uri() );
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri().'/assets/css/responsive.css', array(), '1', 	'all' );

	wp_enqueue_script( 'jqary', get_stylesheet_directory_uri().'/assets/js/jquery-3.3.1.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'Bootstrap.jq', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'carousel', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'fancybox', get_stylesheet_directory_uri().'/assets/js/fancybox.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'wow', get_stylesheet_directory_uri().'/assets/js/wow.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'imagesloaded', get_stylesheet_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'isotope', get_stylesheet_directory_uri().'/assets/js/isotope.pkgd.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'smartmenus', get_stylesheet_directory_uri().'/assets/js/smartmenus.min.js', array('jquery'), '.1', true );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), '.1', true );
}
add_action( 'wp_enqueue_scripts', 'bizcola' );
add_theme_support( 'post-thumbnails' ); 
function bizcola_nav() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu','bizcola' )
    )
  );
}
add_action( 'init', 'bizcola_nav' );

// Section heading Wiget Register>>>>>>>>>>>>>>


/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
// Follow Us SideBar
$Blog_side_bar_2 = array(
	'name'          => __( 'Side Bar', 'bizcola' ),
	'id'            => 'follow',
	'description'   => '',
	'class'         => 'follow-us',
	'before_widget' => '<div class="footer-follow wow fadeInUp" style="visibility: visible; animation-name:fadeInUp;">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="wow fadeInUp">',
	'after_title'   => '</h4>',
);

register_sidebar( $Blog_side_bar_2 );



// Resent post sidebar

// Remove Contact From 7 Span Tag>>>>>
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});



function comment_form_hidden_fields()
	{
		comment_id_fields();
		if ( current_user_can( 'unfiltered_html' ) )
		{
			wp_nonce_field( 'unfiltered-html-comment_' . get_the_ID(), '_wp_unfiltered_html_comment', false );
		}
	}



//popular post function
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

$args = '';
$content_width = '';
if ( ! isset( $content_width ) ) $content_width = 900;
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
wp_list_comments( $args );
wp_link_pages( $args );

function bizcoloaSupport()
{
	add_theme_support( 'automatic-feed-links' );
	add_image_size( 'blog-image',  300, 700 );
	add_theme_support( "title-tag" ); 
	add_theme_support( $feature );
}
add_action( 'after_setup_theme', 'bizcoloaSupport' );
 ?>
