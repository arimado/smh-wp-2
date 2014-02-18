<div class="latest-thing-main side-block">
<?php
	// The Query
	$demo_query = new WP_Query( 'cat=6' );
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