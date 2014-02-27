<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<header class="header">


</header>

<div class="category-header-wrapper" style="background-image: url('<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>'); background-size: cover;">
	<div class="category-header header">
		<div class="category-page-txt">
			<div class="search-page-title entry-title"><?php get_template_part('searchform-page'); ?></div>
			<div class="search-page-description"><h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1></div> 
		</div>
	</div>
	
</div>


<section id="content" role="main">
	<div class="content">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('related-entry'); ?>

		<?php endwhile; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
		
<?php else : ?>

		<header class="header">
		</header>
		<div class="category-header-wrapper" style="background-image: url('<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>'); background-size: cover;">
			<div class="category-header header">
				<div class="category-page-txt">
					<div class="search-page-title entry-title"><?php get_template_part('searchform-page'); ?></div>
					<div class="search-page-description"><?php _e( "Fuck, spewin. Didn't find anything.", 'blankslate' ); ?></h1></div> 
				</div>
			</div>
		</div>

		<section id="content" role="main">
			<div class="content">
<?php endif; ?> 


	</div>
	<?php get_sidebar(); ?>
</section>
</article>

</section>

<?php get_footer(); ?>