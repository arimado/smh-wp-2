<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="category-header-wrapper" style="background-image: url('<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>'); background-size: cover;">
	
	
	<div class="logo-wrap">
		<div class="logo">
			<div class="logo-main"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
			<div class="logo-line"></div>
			<div class="logo-tag"><?php bloginfo( 'description' ); ?></div>  
		</div>
	</div>

	<div class="category-header header">
		<div class="category-page-txt">
			<div class="category-page-title entry-title"><?php the_title(); ?></h1> </div>
			<div class="category-page-description"></div>
		</div>
	</div>

</div>

<section id="content" role="main">


<div class="content">
	<div class="main-content">
	
		<div class="article-content">
			<?php $the_author = get_the_author() ?>
			<?php the_content(); ?> 
		</div>
	</div>
</div>


<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>