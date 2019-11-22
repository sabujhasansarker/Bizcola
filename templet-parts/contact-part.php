<?php

/**
 * @Author: Sabuj
 * @Date:   2019-11-01 14:52:31
 * @Last Modified by:   Sabuj
 * @Last Modified time: 2019-11-21 18:53:23
 */

$option= 'option';
$contact_info_heading = get_field('contact_info_heading',$option);
$contact_info_content = get_field('contact_info_content',$option);
$contact_from_footrer_image = get_field('contact_from_footrer_image',$option);
$address = get_field('address',$option);
$phone = get_field('phone',$option);
$email = get_field('email',$option);
$fax = get_field('fax',$option);
$contact_from_2 = get_field('2nd_contact_from',$option);
if (have_rows('contact_from_icon_box',$option)) {
   while (have_rows('contact_from_icon_box',$option)) {
      the_row();
      $contact_all_icons [] = [
               'contact_icon' => $contact_icon [] = get_sub_field('contact_icon',$option),
               'contact_social_link' => $contact_social_link [] = get_sub_field('contact_social_link',$option)
      ];

   }
}
?>
<?php if (!empty($contact_info_heading)||!empty($contact_info_content)||!empty($address)||!empty($phone)||!empty($email)||!empty($fax)||!empty($contact_all_icons)||!empty($contact_from_2)): ?>
<section class="contact-area section-padding">
        <div class="container">
            <div class="row">
            	<?php if (!empty($contact_info_heading)||!empty($contact_info_content)||!empty($address)||!empty($phone)||!empty($email)||!empty($fax)||!empty($contact_all_icons)): ?>
            		<div class="col-lg-5 wow fadeInRight">
                    <div class="contact-content">
                    	<?php if (!empty($contact_info_heading)): ?>
                        <h4><?php echo $contact_info_heading ?></h4>
                    	<?php endif ?>
                    	<?php if (!empty($contact_info_content)): ?>
                        <p><?php echo $contact_info_content ?></p>
                    	<?php endif ?>
                    	<?php if (!empty($address)): ?>
                        <h6><span>Address : </span> <?php echo $address ?></h6>
                    	<?php endif ?>
                    	<?php if (!empty($phone)): ?>
                    		<h6><span>Phone : </span> <?php echo $phone ?></h6>
                    	<?php endif ?>
                    	<?php if (!empty($email)): ?>
                    		<h6><span>Email : </span><?php echo $email ?></h6>
                    	<?php endif ?>
                    	<?php if (!empty($fax)): ?>
                    		<h6><span>Fax : </span><?php echo $fax ?></h6>
                    	<?php endif ?>
                        <?php if (!empty($contact_all_icons)): ?>
                        <div class="footer-socail">
                            <ul>
                            	<?php foreach ($contact_all_icons as $icon): ?>
                            		<li><a href="<?php echo $icon['contact_social_link']['url'] ?>"><?php echo $icon['contact_icon'] ?></a></li>
                            	<?php endforeach ?>
                            </ul>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            	<?php endif ?>
                <?php if (!empty($contact_from_2)): ?>
                	<div class="col-lg-6 offset-lg-1 wow fadeInLeft">
                    <div class="contact-form">
                            <?php echo $contact_from_2 ?>
                    </div>

                </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>
<style type="text/css">
    .contact-area {
    background: url(<?php echo $contact_from_footrer_image['url'] ?>);
    background-size: cover;
}
</style>