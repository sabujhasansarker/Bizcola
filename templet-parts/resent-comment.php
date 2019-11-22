<!-- Popular-comment start -->
<?php $comments = get_comments( array('number'=> '4') ); ?>
<?php if (!empty($comments)): ?>
<div class="popular-comment">
<h4 class="">Latest Comments</h4>  
<?php foreach ($comments as $com): ?>
	<div class="popular-comment-items wow fadeInUp">
		<h5><span>
			<i class="far fa-comment-dots"></i>
			</span><?php echo $com -> comment_author; ?>
		</h5>
		<p>
			<?php echo $com -> comment_content; ?>	
		</p>
	</div>
<?php endforeach ?>
<?php endif ?>
</div>
<!-- Popular Comment End -->


