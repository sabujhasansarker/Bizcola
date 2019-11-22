<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-02 10:53:16
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-05 13:46:31
 */
$option = 'option';
// Banner Setion >>>>>>>>>>>>>>>>>>
$banner_image= get_field('banner_image',$option);
$banner_background_color = get_field('banner_background_color',$option);
$banner_heading = get_field('banner_heading',$option);
$banner_content = get_field('banner_content',$option);
$banner_button = get_field('banner_button',$option);
// Slider Query>>>>>>>>>>>>>
if (have_rows('banner_slider',$option)) {
   while (have_rows('banner_slider',$option)) {
      the_row();
      $banner_slider_image = get_sub_field('banner_slider_image',$option);
      $sliders [] = [
         'slider_heading' => $slider_heading [] = get_sub_field('slider_heading',$option),
         'slider_content' => $slider_content [] = get_sub_field('slider_content',$option),
         'slider_image' => $banner_slider_background_choose [] = get_sub_field('banner_slider_background_choose',$option)=='Image' ? $banner_slider_image['url'] : get_sub_field('banner_slider_color',$option),
         'slider_btn' => $slider_button_url [] = get_sub_field('slider_button_url',$option)
      ];
   }
}
// <<<<<<<<<<<<< Slider Query
// <<<<<<<<<<<<< Banner Setion End 
// Service Section Start >>>>>>>>>>>>>>>>>>

$service_section_heading = get_field('service_section_heading',$option);
$service_sub_heading = get_field('service_sub_heading',$option);
$service_content_ = get_field('service_content_',$option);
$service_thamble_image = get_field('service_thamble_image',$option);
$service_sub_content = get_field('service_sub_content',$option);
$service_button = get_field('service_button',$option);
$service_blog = get_field('service_blog',$option);

// Contact >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$contact_us_heading= get_field('contact_us_heading',$option);
$contact_us_content = get_field('contact_us_content',$option);
$contact__from_1 = get_field('contact__from_1',$option);
$location_name = get_field('location_name',$option);
// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<contact

// Blog >>>>>>>>>>>>>>>>>>>>>>>>

$blog_heading = get_field('blog_heading',$option);
$blog_content = get_field('blog_content',$option);
$blog_relation = get_field('blog_relation',$option);

