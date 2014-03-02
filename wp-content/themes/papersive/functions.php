<?php 

// ***************************************************
//          DASHICON ICONS
// ***************************************************

add_action( 'wp_enqueue_scripts', 'papersive_load_dashicons' );
function papersive_load_dashicons() {
    wp_enqueue_style( 'dashicons' );
}

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
//          GET MENU NAME 
// ***************************************************

function smh_get_theme_menu_name( $theme_location ) {

     if ( !has_nav_menu( $theme_location ) ) return false;

     $menus      = get_nav_menu_locations();
     $menu_title = wp_get_nav_menu_object( $menus[$theme_location] )->name;

     return $menu_title;

}

// ***************************************************
//          INFINITE SCROLL JAVASCRIPT JS
// ***************************************************

// ENEQUE SCRIPT

function smh_scroll_js(){
  wp_register_script( 'infinite_scroll',  get_stylesheet_directory_uri() . '/scripts/jquery.infinitescroll.min.js', array('jquery'),null,true );
  
  if( ! is_singular() ) {
    wp_enqueue_script('infinite_scroll');
    wp_enqueue_script('manual-trigger');
  }
}
add_action('wp_enqueue_scripts', 'smh_scroll_js');  
  
 

// INIT SCRIPT

function smh_infinite_scroll_js() {
  if( ! is_singular() ) { ?>
  <script>
  

  var infinite_scroll = {
    loading: {
      img: "<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif",
      msgText: "<?php _e( 'Loading the next set of posts...', 'custom' ); ?>",
      finishedMsg: "<?php _e( 'All posts loaded.', 'custom' ); ?>"
    },
    "nextSelector":"#index-pagination .index-pagination-next a",
    "navSelector":"#index-pagination", 
    "itemSelector":".post",
    "contentSelector":"#scroll",
    "behaviour":"twitter"
  };
  jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );


  </script>
  

  <?php
  }
}
add_action( 'wp_footer', 'smh_infinite_scroll_js',100 );

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
echo '<div class="side-title-wrap"><div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div></div>';

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


// --------------------
// RECOMMENDED WIDGET
// --------------------

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
echo '<div class="side-title-wrap"><div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div></div>';

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


// --------------------
// FRONT SOCIAL
// --------------------

// Creating the widget 
class social_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'social_widget', 

// Widget name will appear in UI
__('Social Widget', 'social_widget_domain'), 

// Widget description
array( 'description' => __( 'Shows The Social box on the Frontpage', 'social_widget_domain' ), ) 
);
}


// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo '<div class="side-title-wrap"><div class="side-title"><div class="side-title-txt recommended">' . $title . '</div><div class="side-title-line"></div></div></div>';

// This is where you run the code and display the output
echo get_template_part( 'social' ); 
echo $args['after_widget'];
}
        
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'social_widget_domain' );
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
} // Class social_widget ends here

// Register and load the widget
function social_load_widget() {
    register_widget( 'social_widget' );
}
add_action( 'widgets_init', 'social_load_widget' );


?>