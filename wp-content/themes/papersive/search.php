<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<header class="header">


</header>

<div class="category-header-wrapper" style="background-image: url('<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>'); ">
	
	<div class="logo-wrap">
		<div class="logo">
			<div class="logo-main"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
			<div class="logo-line"></div>
			<div class="logo-tag"><?php bloginfo( 'description' ); ?></div>  
		</div>
	</div>

	<div class="category-header header">
		<div class="search-page-txt">
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

		<div class="logo-wrap">
		<div class="logo">
			<div class="logo-main"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
			<div class="logo-line"></div>
			<div class="logo-tag"><?php bloginfo( 'description' ); ?></div>  
		</div>
		</div>

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