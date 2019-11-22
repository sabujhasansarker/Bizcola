<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-01 14:52:31
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-09 21:23:46
 */
$option = 'option';
$team_heading = get_field('team_heading',$option);
$team_content = get_field('team_content',$option);
$team_button = get_field('team_button',$option);
$team_blog = get_field('team_blog',$option);
if ($team_blog) {
	foreach ($team_blog as $post) {
		setup_postdata($post);
		$team_designation_ = get_field('team_designation_');
		if (have_rows('team_icon_box')) {
			while (have_rows('team_icon_box')) {
				the_row();
				$team_icon_box [] =[
					'team_icon' => $team_icon_name [] = get_sub_field('team_icon_name'),
					'team_btn' => $team_social_link [] = get_sub_field('team_social_link')
				];
			}
		}
		
	}
}
?>

<section class="team-area section-padding">
        <div class="container">
            <div class="row">
            	<?php if (!empty($team_heading) || !empty($team_content) || !empty($team_button)): ?>
            		<div class="col-lg-5">
                    <div class="section-heading team-heading">
                    	<?php if (!empty($team_heading)): ?>
                    		<h2 class=" wow fadeInDown"><?php echo ($team_heading); ?></h2>
                    	<?php endif ?>
                        <?php if (!empty($team_content)): ?>
                        	<p class=" wow fadeInUp"><?php echo $team_content ?></p>
                        <?php endif ?>
                       <?php if (!empty($team_button)): ?>
                       	<a class="theme-btn mt-30  wow fadeInRight" href="<?php echo $team_button['url'] ?>"><?php echo $team_button['title'] ?></a>
                       <?php endif ?>
                        
                    </div>
                </div>
            	<?php endif ?>
                <?php if ($team_blog) { ?>
                <div class="col-lg-7">
                    <div class="row">
                    	<?php 
								foreach ($team_blog as $post) {
									setup_postdata($post);
									$team_designation_ = get_field('team_designation_');
									?>

                        <div class="col-md-6 wow fadeInRight">
                            <div class="single-team">
                            	<?php if (!empty(get_the_post_thumbnail_url())): ?>
                            		<div class="img-hidden">
                                    <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="team">
                                </div>
                            	<?php endif ?>
                                <?php if (!empty(get_the_title()) || !empty($team_designation_ ) || !empty($team_icon_box)): ?>
                                	<div class="team-content">
                                		<?php if (!empty(get_the_title())): ?>
                                			<h3><?php echo get_the_title(  ); ?></h3>
                                		<?php endif ?>
                                    	<?php if (!empty($team_designation_)): ?>
                                    		<p><?php echo $team_designation_ ?></p>
                                    	<?php endif ?>
                                    <?php if (!empty($team_icon_box)): ?>
                                    	<div class="team-social">
                                        <ul> 
									<?php
									foreach ($team_icon_box as $icon) {
										?>

                                            <li><a href="<?php echo $icon['team_btn']['url'] ?>"><?php echo $icon['team_icon'] ?></a></li>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                    <?php endif ?>
                                    
                                </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
										<?php
								}
							}
                    	 ?>
            </div>
        </div>
    </section>