<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-04 18:09:03
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 20:11:44
 */
include 'inc/allQuery.php';
get_header(  );
get_template_part('templet-parts/banner');
// $blog_post_query = new WP_Query(array('post_type'=>'post'));
    ?>
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
if (have_posts()) {

    while (have_posts()) {
        the_post();
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
                                        <p>
                                            <?php the_author( ); ?>
                                        </p>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="user">
                                        <h6><i class="fas fa-calendar-alt"></i></h6>
                                        <p>
                                            <?php the_date( ); ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="blog-de-post">
                                <div class="zoom  wow fadeInUp">
                                    <?php the_post_thumbnail( 'blog-image' ); ?>
                                </div>
                                <div class="post-tag  wow fadeInUp">
                                    <ul>
                                        <?php 
                                    if ($categorys) {
                                            foreach ($categorys as $category) {
                                                ?>
                                            <li><a href="<?php the_permalink(  ) ?>"><?php echo $category->name ?></a></li>
                                            <?php
                                            }
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <?php if (!empty($blog_contents) ): ?>
                                    <p>
                                        <?php echo substr($blog_contents,0,250); ?>
                                    </p>
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
                            <div class="pagination">
                                <?php echo paginate_links(array('prev_text'=> __('<i class="fas fa-angle-double-left"></i>', 'bizcola'),
                                        'next_text'=> __('<i class="fas fa-angle-double-right"></i>', 'bizcola')));
 ?>
                            </div>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('follow'); ?>
                </div>
            </div>
    </section>
    <?php

get_template_part('templet-parts/contact-part');
get_footer(  );