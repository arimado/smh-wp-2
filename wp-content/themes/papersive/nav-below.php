<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="navigation" role="navigation">
<div class="nav-next"><?php previous_posts_link(sprintf( __( '<div class="nav-button">Newer</div>', 'blankslate' ), '' ) ) ?></div>
<div class="nav-previous"><?php next_posts_link(sprintf( __( '<div class="nav-button">Older</div>', 'blankslate' ), '' ) ) ?></div>
</nav> 
<?php } ?>