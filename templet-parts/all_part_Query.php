<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-02 11:08:58
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-03 19:18:41
 */

// About Part Start >>>>>>>>>>>>>>>>>>>

$option = 'option';
$about_heading = get_field('about_heading',$option);
$about_sub_heading = get_field('about_sub_heading',$option);
$about_btn = get_field('about_btn',$option);
$about_content = get_field('about_content',$option);
// Icon Part Quary>>>>>>>>>>>>>>>>>
if (have_rows('about_icon_repeater',$option)) {
   while (have_rows('about_icon_repeater',$option)) {
      the_row();
      $ab_icon_image = get_sub_field('ab_icon_image',$option);
      $about_icons [] = [
         'heading'=> $ab_icon_heading [] = get_sub_field('ab_icon_heading',$option),
         'content' => $ab_icon_content [] = get_sub_field('ab_icon_content',$option),
         'background' => $about_icon_background [] = get_sub_field('about_icon_choose_',$option) == 'Image' ? $ab_icon_image['url'] : get_sub_field('ab_icon_name',$option)
      ];
   }
}
// YouTube Part >>>>>>>>>
$you_tube_image = get_field('you_tube_image',$option);
$youtube_background = get_field('youtube_background_choose',$option)=='Image' ? $you_tube_image['url'] : get_field('you_tube_color',$option);
$you_tube_video_ = get_field('you_tube_video_',$option, false, false);
$ab_side_image = get_field('ab_side_image',$option);

// <<<<<<<<<<<<<<<<< About part End 

// Contact From >>>>>>>>>>>>>>>>>>>>>>>>>>

// <<<<<<<<<<<<<<<<<<<<<<<<<<contact from