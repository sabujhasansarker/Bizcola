<?php $option = 'option' ; ?>
<?php $logo_image = get_field('logo_image',$option); ?>
<?php esc_url(wp_get_attachment_image_url($logo_image->ID,'custom-image-square') ) ?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
<title><?php wp_title() ?></title>
<head>
    
    <?php wp_head(); ?>
    
</head>

<body>
    <!-- ========= preloader area Start =========== -->
    <div id="preloader">
        <div class="loader">
            <img src=" <?php echo get_template_directory_uri() ?> /assets/img/logo/loader.gif" alt="preloader">
        </div>
    </div>
    <!-- ========= preloader area End =========== -->
    <!-- ============ Header area start ============-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" role="navigation">
                        <!-- Mobile menu toggle button (hamburger/x icon) -->
                        <input id="main-menu-state" type="checkbox" />
                        <label class="main-menu-btn" for="main-menu-state">
                            <span class="main-menu-btn-icon"></span>
                        </label>
                        <div class="nav-brand">
                            <a href=""><img src="<?php echo $logo_image['url'] ?> " alt=""></a>
                        </div>
                        <!-- Sample menu definition -->
                         <?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'menu-{menu-slug}-container',
							'container_id'    => '',
							'menu_class'      => 'sm sm-clean',
							'menu_id'         => 'main-menu',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <body <?php body_class( $class ); ?>>
 