<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-03 16:20:02
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-03 20:07:09
 */

$option = 'option';
$subscribe_heading = get_field('subscribe_heading',$option);
$subscribe_content = get_field('subscribe_content',$option);
$subscribe_background_image = get_field('subscribe_background_image',$option);
$subscribe_background = get_field('subscribe_choose_background',$option)=='Image' ? $subscribe_background_image['url'] : get_field('subscribe_background_color',$option);
$subscribe_contact_from_ = get_field('subscribe_contact_from_',$option);
?>
<?php if (!empty($subscribe_heading) || !empty($subscribe_content) || !empty($subscribe_contact_from_)): ?>
	<section class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
            	<?php if (!empty($subscribe_heading) || !empty($subscribe_content)): ?>
            		<div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $subscribe_heading ?></h2>
                        <p class="wow fadeInUp"><?php echo $subscribe_content ?></p>
                    </div>
                </div>
            	<?php endif ?>
            	<?php if (!empty($subscribe_contact_from_)): ?>
            	<div class="col-lg-8 offset-lg-2 wow bounceIn">
                	<?php echo $subscribe_contact_from_ ?>
                </div>
            	<?php endif ?>
            	<style type="text/css">
            		.subscribe-area {
									    background: url(<?php echo $subscribe_background ?>);
									    background: <?php echo $subscribe_background ?>;
									}
            	</style>
            </div>
        </div>
    </section>
<?php endif ?>
