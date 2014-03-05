<div class="latest-thing-main side-block">
<?php


	$args = array(
		'cat' => 6,
		'posts_per_page' => 1
	); 
	// The Query
	$demo_query = new WP_Query( $args );
	// The Loop
	if ( $demo_query->have_posts() ) {
	        echo '<ul>';
		while ( $demo_query->have_posts() ) {
			$demo_query->the_post();
			get_template_part( 'cool-thing-entry' );
		}
	        echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	?>  
</div>