<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-03 21:50:48
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 15:57:15
 */
$option = 'option';
include 'inc/allQuery.php';
get_header();
get_template_part('templet-parts/banner');
?>
    <!-- ============= Service-top area Start =========== -->
<?php if (!empty($service_sub_heading) || !empty($service_content_) || !empty($service_button)): ?>

    <section class="service-bg-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="service-page-top">
                    	<?php if (!empty($service_sub_heading)): ?>
                    		<h3 class="wow fadeInDown"><?php echo $service_sub_heading ?></h3>
                    	<?php endif ?>
                        <?php if (!empty($service_content_)): ?>
                        	<p class="wow fadeInUp"><?php echo $service_content_ ?></p>
                        <?php endif ?>
                        <?php if (!empty($service_button)): ?>
                        	<a class="theme-btn mt-30 wow fadeInRight" href="<?php echo $service_button['url'] ?>"><?php echo $service_button['title'] ?></a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
    	.service-bg-area::after {
						    background-image: url(<?php echo $service_thamble_image['url'] ?>);
						}
    </style>	
<?php endif ?>
    <!-- ============= Service-top area Start =========== -->
        <!-- ============= Service  Area Start =========== -->
        <?php if (!empty($service_section_heading) || !empty($service_sub_content) || !empty(get_the_post_thumbnail_url( )) || !empty(get_the_title() || !empty(get_the_content()))): ?>
        	   <section class="service-page section-padding">
        <div class="container">
            <div class="row">
            	<?php if (!empty($service_section_heading) || !empty($service_sub_content)): ?>
            		<div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                    	<?php if (!empty($service_section_heading)): ?>
                    		<h2 class="wow fadeInDown"><?php echo $service_section_heading ?></h2>
                    	<?php endif ?>
                        <?php if (!empty($service_sub_content)): ?>
                        	<p class="wow fadeInUp"><?php echo $service_sub_content ?></p>
                        <?php endif ?>
                    </div>
                </div>
            	<?php endif ?>
            </div>
            <div class="row  text-center">
            <?php 
            	if ($service_blog) {
                           foreach ($service_blog as $post) {
                           	setup_postdata($post);
                           	?>
                           	<?php if (!empty(get_the_post_thumbnail_url( )) || !empty(get_the_title() || !empty(get_the_content()))): ?>
                           		<div class="col-lg-6 wow fadeInRight">
			                    <div class="service-page-items">
			                    	<?php if (!empty(get_the_post_thumbnail_url( ))): ?>
			                    		<div class="zoom">
			                            <img src="<?php the_post_thumbnail_url(  ) ?>" alt="">
			                        </div>
			                    	<?php endif ?>
			                        <?php if (!empty(get_the_title() || !empty(get_the_content()))): ?>
			                        	<div class="service-page-content">
			                        		<?php if (!empty(get_the_title())): ?>
			                            		<h4><?php the_title( ) ?></h4>
			                        		<?php endif ?>
			                            <?php the_content( ) ?>
			                        </div>
			                        <?php endif ?>
			                    </div>
			                </div>
                           	<?php endif ?>
                           	<?php
                           }
                       }
             ?>    
            </div>
        </div>
    </section>
        <?php endif ?>
 
    <!-- ============= Service  Area End =========== -->
<?php
get_template_part('templet-parts/contact-part');
get_footer();