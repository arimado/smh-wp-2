<?php get_header(); ?>
<div class="category-header-wrapper" style="background-image: url('<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>'); background-size: cover;">
	<div class="category-header header">
		<div class="category-page-txt">
			<div class="category-page-title entry-title"><?php _e( '', 'blankslate' ); ?><?php single_cat_title(); ?></div>
			<div class="category-page-description"><?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?></div>
		</div>
	</div>
	
</div>


<section id="content" role="main" class="category-content">  
	<div class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'related-entry' ); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?> 
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>  

