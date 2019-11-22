<?php

/**
 * @Author: Sabuj
 * @Date:   2019-10-31 13:25:45
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 21:26:21
 */



add_action( 'init', 'my_theme_custom_post' );
function my_theme_custom_post() {

    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services','bizcola' ),
                'singular_name' => __( 'services','bizcola' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon'=>'dashicons-menu-alt3'
        )
    ); 
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects','bizcola' ),
                'singular_name' => __( 'projects','bizcola' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon'=>'dashicons-menu-alt3'
        )
    );
    register_post_type( 'clients',
        array(
            'labels' => array(
                'name' => __( 'Clients','bizcola' ),
                'singular_name' => __( 'clients','bizcola' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon'=>'dashicons-menu-alt3'
        )
    ); 
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team','bizcola' ),
                'singular_name' => __( 'team','bizcola' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon'=>'dashicons-menu-alt3'
        )
    ); 
}


// CUSTOM TAXONOMY / CATEGORIES
function bizcola_custom_category() {
    /**
     * Taxonomy: Custom Categories.
     */
    $labels = array(
        "name"          => __( "Categories", "bizcola" ),
        "singular_name" => __( "Custom Category", "bizcola" ),
    );

    $args = array(
        "label"                 => __( "Custom Categories", "bizcola" ),
        "labels"                => $labels,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rewrite"               => array( 'slug' => 'custom_category', 'with_front' => true, ),
        "rest_base"             => "custom_category",
        'hierarchical'          => true 
        );
    register_taxonomy( "custom_category", array( "projects" ), $args );
}
add_action( 'init', 'bizcola_custom_category' );



//Thumble image show in colom  

if ( !function_exists('AddThumbColumn') && function_exists('add_theme_support') ) {
 
    // for post and page
    add_theme_support('post-thumbnails', array( 'projects', 'page' ) );
 
    function AddThumbColumn($cols) {
        $cols['thumbnail'] = __('Project Image','bizcola');
        return $cols;
    }
 
    function AddThumbValue($column_name, $post_id) {
 
            $width = (int) 70;
            $height = (int) 50;
 
            if ( 'thumbnail' == $column_name ) {
                // thumbnail of WP 2.9
                $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
                // image from gallery
                $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
                if ($thumbnail_id)
                    $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
                elseif ($attachments) {
                    foreach ( $attachments as $attachment_id => $attachment ) {
                        $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                    }
                }
                    if ( isset($thumb) && $thumb ) {
                        echo $thumb;
                    } else {
                        echo __('None', 'bizcola' );
                    }
            }
    }
 
    // for posts manage_projects_posts_columns projects post_type এর নাম
    add_filter( 'manage_projects_posts_columns', 'AddThumbColumn');
    add_action( 'manage_projects_posts_custom_column', 'AddThumbValue', 10, 2 );
   }
function manage_projects_posts_columnsss($columns)
{
    unset($columns['date']);
    $columns['date'] = 'Date';
    return $columns;   
}
add_filter( 'manage_projects_posts_columns', 'manage_projects_posts_columnsss' );