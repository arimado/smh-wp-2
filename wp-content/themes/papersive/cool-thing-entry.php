
<?php 	
	$post_id = get_the_id();
?>
<div class="latest-thing-main">
	<div class="latest-thing-main-img"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'cool-image'); endif; ?></a> </div>
	<div class="latest-thing-main-border">
		<a class="latest-thing-link" href="<?php the_permalink(); ?>"></a>
		<div class="latest-thing-main-border-inner">
			<div class="latest-thing-main-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
			<div class="latest-thing-main-tag-wrapper">
				<div class="latest-thing table-cell empty"></div>
				<div class="latest-thing table-cell">
					<div style="position:relative;">
						<div class="latest-thing-main-line"></div>
					</div>
				</div>
				<div class="latest-thing-main-tag table-cell"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php echo get_post_meta($post->ID, "thing", true);; ?></a></div>
				<div class="latest-thing table-cell">
					<div style="position:relative;">
						<div class="latest-thing-main-line"></div>
					</div>
				</div>
				<div class="latest-thing table-cell empty"></div>
			</div> 
			<div class="latest-thing-main-blurb">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php echo get_post_meta($post->ID, "blurb", true);; ?></a>
			</div> 
		</div> 
	</div> 
</div>  