<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-04 15:18:31
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-05 13:47:06
 */
include 'inc/allQuery.php';
get_header();
get_template_part('templet-parts/banner');
?>
<?php if (!empty($contact_us_heading) || !empty($contact_us_content)||!empty($contact__from_1)): ?>

  <section class="cantact-page section-padding">
        <div class="container">
        	<?php if (!empty($contact_us_heading) || !empty($contact_us_content) ): ?>
        		<div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                    	<?php if (!empty($contact_us_heading)): ?>
                    		<h2><?php echo $contact_us_heading ?></h2>
                    	<?php endif ?>
                        <?php if (!empty($contact_us_content)): ?>
                        	<p><?php echo $contact_us_content ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        	<?php endif ?>
            <?php if (!empty($contact__from_1)): ?>
            	<div class="row mt-50">
                <div class="col-lg-10 offset-lg-1">
                       <?php echo $contact__from_1 ?>
                </div>
            </div>
            <?php endif ?>
        </div>
    </section>
    <?php if (!empty($location_name)): ?>
        <div class="map">
          <iframe 
            src="https://www.google.com/maps?q=<?php echo $location_name ?>&t=&z=17&ie=UTF8&iwloc=&output=embed"  frameborder="0" style="border:0;" allowfullscreen=""> 
        </iframe>
    </div>
    <?php endif ?>
<?php endif ?>
<?php

get_template_part('templet-parts/contact-part');
get_footer();