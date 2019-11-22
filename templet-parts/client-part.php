<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-01 14:52:31
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-03 12:27:04
 */

// Client Section Start>>>>>>>>>>>>>>>>
$option = 'option';
$client_section_heading = get_field('client_section_heading',$option);
$clients_relation_ = get_field('clients_relation_',$option);
?>
    <section class="clients-area section-padding">
        <div class="container">
        	<?php if (!empty($client_section_heading)): ?>
        		<div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInDown">
                        <h2><?php echo $client_section_heading ?></h2>
                    </div>
                </div>
            </div>
        	<?php endif ?>
            <?php if (!empty($client_image) || !empty(get_the_content()) || !empty(get_the_title()) || !empty($client_designation_)): ?>
            	<div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="clients-active owl-carousel">
<?php
if ($clients_relation_) {
   foreach ($clients_relation_ as $post) {
      setup_postdata($post);
      $client_image = get_field('client_image');
      $client_designation_ = get_field('client_designation_');
      ?>
       					<div class="client-item  wow fadeInUp">
       						<?php if (!empty($client_image)): ?>
       							<div class="zoom">
                                <img src="<?php echo $client_image['url'] ?>" alt="client">
                            	</div>
       						<?php endif ?>
                            <?php if (!empty(get_the_content()) || !empty(get_the_title()) || !empty($client_designation_)): ?>
                            	 <div class="client-content">
                                <?php the_content(); ?>
                                <?php if (!empty(get_the_title())): ?>
                                <h4><?php the_title() ?></h4>
                                <?php endif ?>
                                <?php if (!empty($client_designation_)): ?>
                                	<h5><?php echo $client_designation_; ?></h5>
                                <?php endif ?>
                            </div>
                            <?php endif ?>
                        </div>
      <?php
   }
}

?>
<!-- ============= Happy Clients Area Start =========== -->

                       
                    </div>
                </div>
            </div>
            <?php endif ?>
            
        </div>
    </section>
    <!-- ============= SHappy Clients Area End =========== -->