<?php 
$follow_us_title = get_field('follow_us_title-1','widget_follow_widget-2');
$follow_us_description = get_field('follow_us_description','widget_follow_widget-2');
// $follow_us_repiter = ('follow_us_repiter','widget_follow_widget-2');
$newsletter_title = get_field('newsletter_title','widget_follow_widget-2');
$newsletter_description = get_field('newsletter_description','widget_follow_widget-2');
$description_contact_from = do_shortcode(get_field('description_contact_from','widget_follow_widget-2'));
?>
<!-- Sidebar section Start -->
 <div class="follow-us">
                            <h4 class=" wow fadeInUp"><?php echo $follow_us_title ?></h4>
                            <div class="footer-follow wow fadeInUp">
                                <p>
                                    <?php echo $follow_us_description ?>
                                </p>
                                <!-- Follow us Social Icon start -->
                                <?php if (have_rows('follow_us_repiter','widget_follow_widget-2')): ?>
                                    <?php 
                                        while (have_rows('follow_us_repiter','widget_follow_widget-2')) {
                                            the_row();
                                            $follow_social_icon_name = get_sub_field('follow_social_icon_name','widget_follow_widget-2');
                                            $follow_social_link = get_sub_field('follow_social_link','widget_follow_widget-2');
                                            ?>
                                            <a href="<?php echo $follow_social_link['url'] ?>"><?php echo $follow_social_icon_name ?></a>
                                            <?php
                                        }
                                     ?>
                                <?php endif ?>
                                <!-- Follow Us Social Icon End -->
                            </div>
                            <h4 class=" wow fadeInUp"><?php echo $newsletter_title ?></h4>
                            <p class=" wow fadeInUp"><?php echo $newsletter_description ?></p>
                            <!-- Subsribe Section Start -->
                            <?php echo $description_contact_from; ?>
                        </div>