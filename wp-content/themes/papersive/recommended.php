<div class="recommended-main side-block">
<?php
	// The Query

	$args = array(
		'tag' => 'recommended',
		'posts_per_page' => 5
	); 
	$demo_query = new WP_Query($args);
	// The Loop
	if ( $demo_query->have_posts() ) {
	        echo '<ul class="clickables">';
		while ( $demo_query->have_posts() ) {
			$demo_query->the_post();
			get_template_part( 'recommendedc-entry' );
		}
	        echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	?>  
</div>


