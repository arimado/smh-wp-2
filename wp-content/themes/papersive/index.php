<?php get_header(); ?>


<?php get_template_part( 'featured' ); ?> 


<section id="content" role="main">
<div class="content">
<?php 
$sticky = get_option( 'sticky_posts' );
$args = array(
	'ignore_sticky_posts' => 1,
	'post__not_in' => $sticky,
	'cat' => -6
	);
?>
<?php $the_query = new WP_Query( $args );?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php get_template_part( 'related-entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?> 
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?> 