
<div id="post-<?php the_ID(); ?>">
	<div class="cat-title-txt-wrap"> 
	<div class="cat-date"><?php the_time( 'l' ); ?> the <?php the_time( 'd' ); ?><?php the_time( 'S' ); ?> of <?php the_time( 'F Y' ); ?></div>
	<div class="cat-title"><a href="<?php echo get_permalink(); ?>" title="Go to <?php echo the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></div> 
	<div class="cat-tag-wrapper">
		<div class="cat-tag table-cell empty"></div>
		<div class="cat-tag table-cell">
			<div class="cat-tag-main-line"></div>
		</div>
		<div class="cat-tag-txt table-cell"><?php _e( '', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 
		<div class="cat-tag table-cell">
			<div class="cat-tag-main-line"></div> 
		</div>
		<div class="cat-tag table-cell empty"></div> 
	</div> 
	<div class="cat-tag-author">By <?php the_author_meta( first_name ); ?> <?php the_author_meta( last_name ); ?> </div> 
</div>
</div> 