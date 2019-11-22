<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-11 13:27:20
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 15:55:12
 */

get_header(  );
get_template_part('templet-parts/banner');

    ?>
    <section class="blog-page section-padding" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
if (have_posts()) {

    while (have_posts()) {
        the_post();
        // post popular post count++
        wpb_set_post_views(get_the_ID());
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
                                    <img src="<?php echo get_the_post_thumbnail_url(  ); ?>" alt="blog">
                                </div>

                                <?php the_content( ) ?>

                            </div>
                        </div>
                        <div class="next-pre-post wow fadeInUp">
                            <div class="pre-post">
                                <h6>Previous Post</h6>
                                <p>
                                    <?php previous_post_link('%link'); ?>
                                </p>
                            </div>
                            <div class="pre-post tx-right">
                                <h6>Next Post</h6>
                                <p>
                                    <?php next_post_link('%link' ) ?>
                                </p>
                            </div>
                        </div>
                        <div class="post-tag  wow fadeInUp">
                            <ul>
                                <?php 
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

                        <?php
                            }
                        }
                            ?>
                            <div class="related-posts-area">
                                <h4>Related Posts</h4>
                                <div class="related-posts  wow fadeInUp">

                                    <?php

                                        query_posts( 'showposts=2' );
                                        while ( have_posts() ) : the_post();
                                        ?>
                                        <div class="related-posts-single">
                                            <div class="zoom">
                                                <a href="<?php the_permalink( ) ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>"></a>
                                                <h5><a href="<?php the_permalink( ) ?>"><?php the_title( ) ?></a>
                                                </h5>
                                            </div>
                                            <a href="<?php the_permalink( ) ?>">
                                                    <?php the_title( ) ?>
                                                </a>
                                            <div class="user-option">
                                                <a href="">
                                                    <div class="user">
                                                        <h6><i class="fas fa-user"></i></h6>
                                                        <p><?php the_author( ); ?></p>
                                                    </div>
                                                </a>
                                                <a href="">
                                                    <div class="user">
                                                        <h6><i class="fas fa-calendar-alt"></i></h6>
                                                        <p><?php the_date( ) ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                    <!-- COMMENT BOX START  -->
                    <div class="comment-area wow fadeInUp">
                        <?php comments_template( $file, $separate_comments );  ?>
                    <?php 
                    include 'comment.php';
                     ?>
                 </div>
                </div>
                <!-- Sidebar Start -->
                 <div class="col-md-4">
                    <?php dynamic_sidebar('follow'); ?>
                    <?php dynamic_sidebar('resent-comment'); ?>
                    <?php dynamic_sidebar('resent-post'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php

get_template_part('templet-parts/contact-part');
get_footer(  );