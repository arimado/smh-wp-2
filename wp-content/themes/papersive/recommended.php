<div class="recommended-main side-block">
<?php
	// The Query
	$demo_query = new WP_Query( 'tag=recommended' );
	// The Loop
	if ( $demo_query->have_posts() ) {
	        echo '<ul>';
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


