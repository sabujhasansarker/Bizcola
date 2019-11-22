<?php

/**
 * @Author: Sabuj
 * @Date:   2019-10-30 13:33:09
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-22 12:13:25
 */


if( function_exists('acf_add_options_page') ) {


	acf_add_options_page(array(

		'page_title' 	=> 'Settings',

		'menu_title'	=> 'Theme Settings',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> false

	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page',
		'menu_slug' 	=> 'home_page',
		'menu_title'	=> 'Home Page',
		'parent_slug'	=> 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'About Page',
		'menu_slug' 	=> 'about_page',
		'menu_title'	=> 'About Page',
		'parent_slug'	=> 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Service Page',
		'menu_slug' 	=> 'service_page',
		'menu_title'	=> 'Service Page',
		'parent_slug'	=> 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'menu_title' => '<i class="ion-wand"></i> ' . esc_html__( 'Team Page', 'bizcola' ),
		'menu_slug' 	=> 'team_page',
		'menu_title'	=> 'Team Page',
		'parent_slug'	=> 'theme-general-settings',
	));acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Page',
		'menu_slug' 	=> 'blog_page',
		'menu_title'	=> 'Blog Page',
		'parent_slug'	=> 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Page',
		'menu_slug' 	=> 'contact_page',
		'menu_title'	=> 'Contact Page',
		'parent_slug'	=> 'theme-general-settings',
	));	acf_add_options_sub_page(array(
		'page_title' 	=> 'Projact Page',
		'menu_slug' 	=> 'project_page',
		'menu_title'	=> 'Project Page',
		'parent_slug'	=> 'theme-general-settings',
	));
		


}



// Guttenbarg off/on 



if( function_exists('acf_add_options_page') ) {



$gOnOff = get_field('gutenberg_editor_123', 'option');

if ($gOnOff == 0) {

// disable for posts

add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types

add_filter('use_block_editor_for_post_type', '__return_false', 10);

}



}