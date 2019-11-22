
<?php

// Register and load the widget
function follow_us_load_widget() {
    register_widget( 'follow_widget' );
    register_widget( 'comment_widget' );
    register_widget( 'resent_post_widget' );
    register_widget( 'most_popular' );
}
add_action( 'widgets_init', 'follow_us_load_widget' );
 
// Creating the widget 
class follow_widget extends WP_Widget {
 
	function __construct() {
	parent::__construct(
	 
	// Base ID of your widget
	'follow_widget', 
	 
	// Widget name will appear in UI
	__('Follow us sidebar', 'bizcola'), 
	 
	// Widget description
	array( 'description' => __( 'widget for follow us sidebar', 'bizcola' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	get_template_part( 'templet-parts/sidebar' );
}
         
// Widget Backend 
public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}
else {
	$title = __( 'New title', 'bizcola' );
}

}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
}
} // Class follow_widget ends here

// Latest Comments Start 

class comment_widget extends WP_Widget {
	function __construct() {
	parent::__construct(
	// Base ID of your widget
	'comment_widget', 
	 
	// Widget name will appear in UI
	__('Resent Comment sidebar', 'bizcola'), 
	 
	// Widget description
	array( 'description' => __( 'widget for Resent Comment sidebar', 'bizcola' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	get_template_part( 'templet-parts/resent-comment' );
}
         
// Widget Backend 
public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}
else {
	$title = __( 'New title', 'bizcola' );
}

}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
}
} // Class follow_widget ends here

// Resent post
class resent_post_widget extends WP_Widget {
	function __construct() {
	parent::__construct(
	// Base ID of your widget
	'resent_post_widget', 
	 
	// Widget name will appear in UI
	__('Resent Post sidebar', 'bizcola'), 
	 
	// Widget description
	array( 'description' => __( 'widget for Resent Post sidebar', 'bizcola' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	get_template_part( 'templet-parts/resent-post' );
}
         
// Widget Backend 
public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}
else {
	$title = __( 'New title', 'bizcola' );
}

}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
}
} // Class follow_widget ends here

// most Popular post
class most_popular extends WP_Widget {
	function __construct() {
	parent::__construct(
	// Base ID of your widget
	'most_popular', 
	 
	// Widget name will appear in UI
	__('Most popular Post sidebar', 'bizcola'), 
	 
	// Widget description
	array( 'description' => __( 'widget for popular Post sidebar', 'bizcola' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	get_template_part( 'templet-parts/popular-post' );
}
         
// Widget Backend 
public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}
else {
	$title = __( 'New title', 'bizcola' );
}

}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
}
} // Class follow_widget ends here