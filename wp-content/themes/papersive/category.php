<?php get_header(); ?>
<div class="category-header-wrapper">
	<div class="category-header header">
		<div class="category-page-txt">
			<div class="category-page-title entry-title"><?php _e( '', 'blankslate' ); ?><?php single_cat_title(); ?></div>
			<div class="category-page-description"><?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?></div>
		</div>
	</div>
</div>


<section role="main" class="category-content"> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'cat-entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>  

