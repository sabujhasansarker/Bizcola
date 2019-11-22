<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-03 21:50:48
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-04 13:57:17
 */
$option = 'option';
get_header(  );
get_template_part('templet-parts/banner');
if (get_field('you_want_about_part',$option) == 1) {
get_template_part('templet-parts/about-part');
}
if (get_field('about_you_want_team_section_',$option) == 1) {
get_template_part('templet-parts/team_part');
}
if (get_field('about_you_want_subscribe_section',$option) == 1) {
	get_template_part('templet-parts/subscribe-part');

} 
if (get_field('about_you_want_clients_section',$option) == 1) {
	get_template_part('templet-parts/client-part');

}
// Video Section>>>>>>>>>>>>>>>>>>
$ab_2nd_video_content = get_field('ab_2nd_video_content',$option);
$ab_video_section_ = get_field('ab_video_section_',$option,false, false);
$about_background_image_2 = get_field('about_background_image_2',$option);
if (get_field('ab_you_want_video_section_',$option)==1) {
?>
  <div class="pop-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pop-video-content">
                    	<?php if (!empty($ab_2nd_video_content)): ?>
                    		<p class="wow fadeInDown"><?php echo $ab_2nd_video_content ?> </p>
                    	<?php endif ?>
                        <?php if (!empty($ab_video_section_)): ?>
                        	<a data-fancybox href="<?php echo $ab_video_section_ ?>" class=" wow fadeInUp">
                            <div class="vi">
                                <div class="example-1"><i class="fas fa-play"></i></div>
                            </div>
                        </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
    	.pop-video {
				    background: url(<?php echo $about_background_image_2['url'] ?>);
				}
    </style>
<?php
}
// Video Section>>>>>>>>>>>>>>>>>>
// Project Gallery Section >>>>>>>>>>>>>>>
$ab_project_gallery_heading = get_field('ab_project_gallery_heading',$option);
$ab_project_gallery_content = get_field('ab_project_gallery_content',$option);
$ab_project_gallery_image = get_field('ab_project_gallery_image',$option);
if (get_field('ab_you_want_project_gallery_section_',$option)==1) {
	?>
	<?php if (!empty($ab_project_gallery_heading)||!empty($ab_project_gallery_content)): ?>

    <section class="project-gallery-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                    	<?php if (!empty($ab_project_gallery_heading)): ?>
                    		<h2 class=" wow fadeInDown"><?php echo $ab_project_gallery_heading ?></h2>
                    	<?php endif ?>
                        <?php if (!empty($ab_project_gallery_content)): ?>
                        	<p class=" wow fadeInUp"><?php echo $ab_project_gallery_content ?></p>
                        <?php endif ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  wow fadeInDown">
                    <div class="photo-gallery owl-carousel">
                    	<?php if ($ab_project_gallery_image): ?>
                    		<?php foreach ($ab_project_gallery_image as $image): ?>
                    			 <div class="photo-item">
		                            <img  src="<?php echo esc_url($image['url']) ?>" alt="portlio-image">
		                        </div>
                    		<?php endforeach ?>
                    	<?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	<?php endif ?>
<?php
}

// Project Gallery Section >>>>>>>>>>>>>>>
if (get_field('about_you_want_contact_section_',$option) == 1) {
	get_template_part('templet-parts/contact-part');

}
get_footer(  );