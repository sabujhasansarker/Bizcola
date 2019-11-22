<?php $popularpost = new WP_Query( array('post_type'=>'post', 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); ?>
<div class="sidebar-right">
    <div class="popular-post">
        <h4 class=" wow fadeInUp">Most Popular</h4>
        <!-- Query start -->
        <?php 
        	while ($popularpost->have_posts()) {
        		$popularpost->the_post();
               	$blog_contents = get_the_content();
               	?>
               	<a href="">
		            <div class="popular-post-single  wow fadeInUp">
		                <div class="popular-post-content">
		                    <h5><?php the_title(  ) ?></h5>
		                    <p><?php echo substr($blog_contents,0,50); ?></p>
		                </div>
		                <div class="popular-post-img">
		                    <div class="zoom">
		                        <img src="<?php the_post_thumbnail_url(  ) ?>" alt="popular-post-1">
		                    </div>
		                </div>
		            </div>
		        </a>
               	<?php
        	}
         ?>
        <!-- Query end -->
    </div>
</div>
