<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-04 18:09:03
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 19:36:24
 */
include 'inc/allQuery.php';
get_header(  );
get_template_part('templet-parts/banner');
$blog_post_query = new WP_Query(array('post_type'=>'post'));
    ?>
        <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
    <?php
if ($blog_post_query->have_posts()) {

    while ($blog_post_query->have_posts()) {
        $blog_post_query->the_post();
        $blog_contents = get_the_content();
        $categorys = get_the_category();
        $avatar = get_avatar(get_the_author_meta('ID'));
		?>
                    <div class="blog-page-content mt-70">
                        <h3 class="wow fadeInDown"><?php the_title(  ); ?></h3>
                        <div class="user-option wow fadeInUp">
                            <a href="">
                                <div class="user">
                                    <h6><?php echo $avatar ?></h6>
                                    <p><?php the_author( ); ?></p>
                                </div>
                            </a>
                            <a href="">
                                <div class="user">
                                    <h6><i class="fas fa-calendar-alt"></i></h6>
                                    <p><?php the_date( ); ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="blog-de-post">
                            <div class="zoom  wow fadeInUp">
                                <img src="<?php echo get_the_post_thumbnail_url( 'custom-image-square' ); ?>" alt="blog">
                            </div>
                            <div class="post-tag  wow fadeInUp">
                                <ul><?php 
                                	if ($categorys) {
											foreach ($categorys as $category) {
												?>
												<li><a href=""><?php echo $category->name ?></a></li>
												<?php
											}
											}
                                 		?>
                                </ul>
                            </div>
                            <?php if (!empty($blog_contents) ): ?>
                              <p><?php echo substr($blog_contents,0,250); ?></p>
                            <?php endif ?>
                            <?php if (str_word_count($blog_contents) > 250): ?>
                            	 <a class="theme-btn mt-30" href="<?php the_permalink() ?>">Read more</a>
                            <?php endif ?>
                           
                        </div>
                    </div>
            
		<?php
	}
}

?>
</div>
        </div>
    </section>

<?php
echo paginate_links(array('prev_text'=> __(' Previous', 'bizcola'),
                                        'next_text'=> __('Next', 'bizcola')));
get_template_part('templet-parts/contact-part');
get_footer(  );
