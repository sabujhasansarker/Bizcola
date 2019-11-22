<!-- Resent Post Start -->
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
<!-- Resent post end -->