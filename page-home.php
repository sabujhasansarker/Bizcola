<?php
   /**
    * @Author: Sabuj
    * @Date:   2019-10-31 15:33:34
    * @Last Modified by:   Sabuj
    * @Last Modified time: 2019-11-18 01:12:06
    */

get_header();
include 'inc/allQuery.php';
// Banner Section Start >>>>>>>>>>>>>>>>>
if (get_field('you_went_banner_section_',$option)==1) {
  ?>
      <section class="hero-area">
        <div class="slider owl-carousel">
  <?php
  foreach ($sliders as $slider) {
     ?>
            <div class="slider-items">
                <div class="slider-img">
                  <?php if (!empty($slider['slider_image'])): ?>
                    <img src="<?php echo $slider['slider_image']; ?>" alt="">
                  <?php endif ?>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="slider-content">
                              <?php if (!empty($slider['slider_heading'])): ?>
                                <h2><?php echo $slider['slider_heading']; ?></h2>
                              <?php endif ?>
                                <?php if (!empty($slider['slider_content'])): ?>
                                  <p><?php echo $slider['slider_content'] ?></p>
                                <?php endif ?>
                                <?php if (!empty($slider['slider_btn'])): ?>
                                  <div class="slider-btn">
                                    <a class="theme-btn btn-left" href=""><?php echo $slider['slider_btn']['title'] ?></a>
                                </div>
                                <?php endif ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php
   }
}
?>
        </div>
    </section>
<?php
// <<<<<<<<<<<<<<<<<< Banner Section End
// About Section Start>>>>>>>>>>>>>>>>>>
if (get_field('you_went_about_section',$option)==1) {
   get_template_part('templet-parts/about-part');
 } 
// <<<<<<<<<<<<<<<<<<<About SEction End
// Service Section Stat>>>>>>>>>>>>
 if (get_field('you_went_services_section',$option)==1) {
  ?>
  <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown">Our Services</h2>
                        <p class="wow fadeInUp">Etiam id augue sollicitudin ex ultrices accumsan id eget urna. Duis ut vestibulum arcu. Ut congue facilisis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="service-active owl-carousel">
                      <?php 
                           if ($service_blog) {
                           foreach ($service_blog as $post) {
                              setup_postdata($post);
                              $all_icon_image = get_field('all_icon_image');
                              $all_icon = get_field('all_choose_icon_')=='Image' ? $all_icon_image['url'] : get_field('all_icon_name');
                              ?>
                        <div class="service-items">
                          <?php if (!empty(get_the_post_thumbnail_url())): ?>
                            <div class="zoom">
                                <img src="<?php the_post_thumbnail_url(  ); ?>" alt="service">
                            </div>
                          <?php endif ?>
                          <?php if (!empty($all_icon) || !empty(get_the_content( )) || !empty(get_the_title()) ): ?>
                            <div class="service-item">
                              <?php if (!empty($all_icon)): ?>
                                <div class="zoom">
                                    <img src="<?php echo $all_icon ?>" alt="service-icon">
                                </div>
                              <?php endif ?>
                                <?php if (!empty(get_the_content( )) || !empty(get_the_title()) ): ?>
                                  <div class="service-item-content">
                                  <?php if (!empty(get_the_title())): ?>
                                    <a href="<?php the_permalink(  ) ?>"><h4><?php echo the_title(); ?></h4></a>
                                  <?php endif ?>
                                    <?php the_content( ); ?>
                                </div>
                                <?php endif ?>
                            </div>
                          <?php endif ?>
                        </div>
                        <?php 
                           }
                        }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php
}
// <<<<<<<<<<<<<<<<<<<<< Service Section End
// Subscribe-part start 
get_template_part('templet-parts/subscribe-part');
// Project section start

if (get_field('you_went_project_section',$option)==1) {
  get_template_part('templet-parts/project-part');
}

// Client Part Start>>>>>>>>>>>>>>>>>>>>>>>
if (get_field('you_went_clients_section_',$option)==1) {
  get_template_part('templet-parts/client-part');
}   
// <<<<<<<<<<<<<<<<<<<<<Client Part End

// Team Part Start >>>>>>>>>>>>>>>>>>>>
if (get_field('you_want_team_section_',$option)==1) {
$option = 'option';
$team_heading = get_field('team_heading',$option);
$team_content = get_field('team_content',$option);
$team_button = get_field('team_button',$option);
$home_team_relation = get_field('home_team_relation',$option);
if ($home_team_relation) {
  foreach ($home_team_relation as $post) {
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
              <?php if (get_field('you_want_team_heading_&_content_section_',$option)==1): ?>
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
               
              <?php endif ?>
                <?php if ($home_team_relation) { ?>
                <div class="col-lg-7">
                    <div class="row">
                      <?php 
                foreach ($home_team_relation as $post) {
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
  <?php
}
// <<<<<<<<<<<<<<<<<<<<<<<Team Part End
 ?>
 <!-- Bloge Section Start -->
 <?php if (get_field('you_want_blog_section',$option)==1): ?>
 
 <?php if (!empty(get_the_author()) || !empty(get_the_time()) || !empty(get_the_date()) || !empty(get_the_title()) ||!empty(get_the_content()) || !empty(get_the_permalink())|| !empty($blog_heading) || !empty($blog_content)): ?>

    <section class="recent-blog-area section-padding">
        <div class="container">
          <?php if (!empty($blog_heading)|| !empty($blog_content)): ?>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading mb-30 text-center">
                      <?php if (!empty($blog_heading)): ?>
                        <h2 class="wow fadeInDown"><?php echo $blog_heading; ?></h2>
                      <?php endif ?>
                        <?php if (!empty($blog_content)): ?>
                          <p class="wow fadeInUp"><?php  echo $blog_content; ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
          <?php endif ?>
            
 <?php
 if ($blog_relation) {
 $limit = 0;
  ?>
  <div class="row">
  <?php
   foreach ($blog_relation as $post) {
   setup_postdata($post);
   $content = get_the_content();
    ?>
     <div class="col-md-6 dis-flex wow fadeInRight">
                    <div class="single-recent-post">
                      <?php if (!empty(get_the_post_thumbnail())): ?>
                        <div class="img-hidden">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="blog">
                        </div>
                      <?php endif ?>
                        <?php if (!empty(get_the_author(  )) || !empty(get_the_time()) || !empty(get_the_date(  ))|| !empty(get_the_title(  )) ||!empty(get_the_content())||!empty(get_the_permalink(  )) ): ?>
                          <div class="single-blog-content">
                            <?php if (!empty(get_the_author(  )) || !empty(get_the_time()) || !empty(get_the_date(  ))): ?>
                              <div class="single-blog-rating">
                                <ul>
                                  <?php if (!empty(get_the_author(  )) ): ?>
                                    <li><a href=""><span><i class="fas fa-user"></i></span><?php the_author( ); ?></a></li>
                                  <?php endif ?>
                                    <?php if (!empty(get_the_time())): ?>
                                      <li><a href=""><span><i class="far fa-clock"></i></span><?php  the_time(); ?></a></li>
                                    <?php endif ?>
                                    <?php if (!empty(get_the_date(  ))): ?>
                                      <li><a href=""><span><i class="far fa-calendar-alt"></i></span><?php the_date( ); ?></a></li>
                                    <?php endif ?>
                                </ul>
                            </div>
                            <?php endif ?>
                            
                            <?php if (!empty(get_the_title(  ))): ?>
                              <h3><a href="<?php the_permalink() ?>"><?php the_title(  ); ?></a></h3>
                            <?php endif ?>
                            <?php if (!empty(get_the_content()) ): ?>
                              <p><?php echo substr($content,0,100); ?></p>
                            <?php endif ?>
                            <?php if (!empty(get_the_permalink(  ))): ?>
                              <div class="read-more-blog">
                                <a href="<?php the_permalink() ?>">Read more</a>
                            </div>
                            <?php endif ?>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
                <?php

                $limit++;
                if ($limit==2) {
                  break;
                }
                
             }
             ?>

            </div>
 <?php
 }
 ?>

           
        </div>
    </section>
   <?php endif ?>

 <?php endif ?>
 <!-- Blog Part End -->
 <?php

if (get_field('you_want_contact_section',$option)==1) {
  get_template_part('templet-parts/contact-part');
}
 

 // >>>>>>>>>>>>>>>>>>>> Blog Part

get_footer();
?>
