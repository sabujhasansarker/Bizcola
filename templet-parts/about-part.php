<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-01 14:52:31
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-04 11:10:47
 */

include_once 'all_part_Query.php';
if (get_field('you_want_about_part',$option)==1) {
   ?>
   <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="video-area">
                        <img src="<?php echo $youtube_background ?>" alt="Video">
                        <a data-fancybox href="<?php echo $you_tube_video_ ?>">
                            <div class="vi">
                                <div class="example-1"><i class="fas fa-play"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight">
                    <div class="about-heading">
                     <?php if (!empty($about_heading)): ?>
                        <h2 class="wow fadeInDown"><?php echo $about_heading ?></h2>
                     <?php endif ?>
                     <?php if (!empty($about_sub_heading)): ?>
                        <h4 class="wow fadeInUp"><?php echo $about_sub_heading ?></h4>
                     <?php endif ?>
                     <?php if (!empty($about_content)): ?>
                        <p><?php echo $about_content ?></p>
                     <?php endif ?>
                        <?php if (!empty($about_btn)): ?>
                           <a href="<?php echo $about_btn['url'] ?>" class="theme-btn  wow fadeInUp"><?php echo $about_btn['title'] ?></a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="row ml-270">
               <?php foreach ($about_icons as $ab_icon): ?>
                  <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="about-itm-heading">
                            <div class="zoom">
                                <img src="<?php echo $ab_icon['background'] ?>" alt="icon">
                            </div>
                            <?php if (!empty($ab_icon['heading'])): ?>
                               <h4><?php echo $ab_icon['heading'] ?></h4>
                            <?php endif ?>
                        </div>
                        <?php if ($ab_icon['content']): ?>
                           <p><?php echo $ab_icon['content'] ?></p>
                        <?php endif ?>
                     </div>
                </div>
               <?php endforeach ?>
            </div>
        </div>
    </section>
    <style type="text/css">
    .about-area::after {
    background: rgba(0, 0, 0, 0) url(<?php echo $ab_side_image['url'] ?>) no-repeat scroll 0 0;
}
 </style>
   <?php
}
?>
 