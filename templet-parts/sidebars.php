
<div class="popular-comment">
  <h4 class="">Latest Comments</h4>                   
<?php 
  $comments = get_comments( array('number'=> '4') );
  foreach ($comments as $com) {
    ?>
    <div class="popular-comment-items wow fadeInUp">
                                <h5><span><i class="far fa-comment-dots"></i></span><?php echo $com -> comment_author; ?></h5>
                                <p><?php echo $com -> comment_content; ?></p>
                            </div>
    <?php
    
  };
 ?>
 </div>
 <div class="sm-post">
 <?php
    query_posts( 'showposts=4' );
    while ( have_posts() ) : the_post();
    ?>
    <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                  <img src="<?php the_post_thumbnail_url(  ) ?>">
                                </div>
                                  <p><?php the_title() ?></p>
                            </a>
    <?php
endwhile;
?>
  
</div>

