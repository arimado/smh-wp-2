<?php get_header(); ?>
<?php get_template_part( 'featured' ); ?> 
<section id="content" role="main">

<?php 
$sticky = get_option( 'sticky_posts' );
$args = array('ignore_sticky_posts' => 1,'post__not_in' => $sticky);
?>

<?php $the_query = new WP_Query( $args );?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php get_template_part( 'index-entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?> 

<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>