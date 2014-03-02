<?php get_header(); ?>


<?php get_template_part( 'featured_b' ); ?> 


<section id="front-page-content" role="main">
<div class="front-page-content" id="scroll">
	<div class="content-posts">
<?php 

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'ignore_sticky_posts' => 1,
	'paged' => $paged,
	'post__not_in' => $sticky,
	'cat' => -6);
?>
<?php $the_query = new WP_Query( $args );?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php get_template_part( 'index-entry-b' ); ?>
<?php comments_template(); ?>
<?php endwhile; ?> 
<?php endif; ?> 
	</div>


<?php //get_template_part( 'nav', 'below' ); ?> 


	
</div>

<nav id="nav-below" class="navigation" role="navigation">
<div class="nav-next"><div class="nav-button">LOAD MORE</div></div>
</nav> 


<nav id="index-pagination">
    <ul>
        <li class="index-pagination-previous"><?php previous_posts_link( '&laquo; PREV', $the_query->max_num_pages) ?></li> 
        <li class="index-pagination-next"><?php next_posts_link( 'NEXT &raquo;', $the_query->max_num_pages) ?></li>
    </ul>
</nav>

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?> 