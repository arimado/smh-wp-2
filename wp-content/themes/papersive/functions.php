<?php 

// ***************************************************
// 			MULTIPOST THUMBNAILS 
// ***************************************************
 if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Cover Image',
                'id' => 'cover-image',
                'post_type' => 'post'
            )
        );
        new MultiPostThumbnails(
            array(
                'label' => 'Cool Image',
                'id' => 'cool-image',
                'post_type' => 'post'
            )
        );
  }  
// ***************************************************
// 					WIDGETS 
// ***************************************************



// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo '<div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div>';

// This is where you run the code and display the output
echo get_template_part( 'cool-thing' ); 
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// STOOOP !!!! 

// Creating the widget 
class recommended_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'recommended_widget', 

// Widget name will appear in UI
__('Recommended Reading', 'recommended_widget_domain'), 

// Widget description
array( 'description' => __( 'Shows the posts tagged with "recommended".', 'recommended_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo '<div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div>';

// This is where you run the code and display the output
echo get_template_part( 'recommended' ); 
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'recommended_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class recommended_widget ends here

// Register and load the widget
function recommended_load_widget() {
	register_widget( 'recommended_widget' );
}
add_action( 'widgets_init', 'recommended_load_widget' );


?>