<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-03 22:01:45
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 18:55:00
 */
$option = 'option';
$page_banner_image = get_field('page_banner_image',$option);
$page_banner_color = get_field('page_banner_color',$option);
if (!empty($page_banner) || !empty(get_the_title())) {
	?>
	<div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<?php if (!empty(get_the_title(  ))): ?>
                		<div class="page-content">
                        <h2 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"><?php echo wp_title( $sep = '') ?></h2>
                        <ul class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <li><a href="<?php echo get_home_url(  ) ?>">Home - </a></li>
                            <li class="active"><a href=""><?php wp_title( $sep = ';') ?></a></li>
                        </ul>
                    </div>
                	<?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
    	.page-area {
				    background: url(<?php echo $page_banner_image['url'] ?>);
				    background: <?php echo $page_banner_color; ?>
				}
    </style>
	<?php
}