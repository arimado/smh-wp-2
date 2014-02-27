<?php get_header(); ?>


<!-- ARTICLE HEADER -->
<div class="logo-wrap">
	<div class="logo">
		<div class="logo-main"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
		<div class="logo-line"></div>
		<div class="logo-tag"><?php bloginfo( 'description' ); ?></div>  
	</div> 
</div> 

<!-- END OF LOGO -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				$coverImage = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'cover-image');

				?>	
<div class="ft-img" style="background: url('<?php echo $coverImage; ?>');background-position:top;background-size:cover;">


						<div class="logo-wrap">
							<div class="logo">
								<div class="logo-main"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
								<div class="logo-line"></div>
								<div class="logo-tag"><?php bloginfo( 'description' ); ?></div>  
							</div>
						</div>

						<div class="ft-title-txt-wrap">
						<div class="ft-date"><?php the_time( 'F j' ); ?> , <?php the_time( 'Y' ); ?></div>
						<div class="ft-title"><a href="<?php echo get_permalink(); ?>" title="Go to <?php echo the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></div> 
						<div class="ft-tag-wrapper">
											<div class="ft-tag table-cell empty"></div>
											<div class="ft-tag table-cell">
												<div style="position:relative">
													<div class="ft-tag-main-line"></div>
												</div>
											</div>
											<div class="ft-tag-txt table-cell"><?php _e( '', 'blankslate' ); ?><?php the_category( ', ' ); ?></div> 
											<div class="ft-tag table-cell">
												<div style="position:relative">
													<div class="ft-tag-main-line"></div>
												</div>
											</div>
											<div class="ft-tag table-cell empty"></div>
										</div> 
						<div class="ft-tag-author">By <?php the_author_meta( first_name ); ?> <?php the_author_meta( last_name ); ?> </div> 
					</div><!-- end ft-title-txt-wrap -->
					<div class="dark-overlay"></div>
</div>
<!-- END OF ARTICLE HEADER -->  
<section id="content" role="main">

<div class="content">
	<div class="main-content">
	
		<div class="article-content">
			<?php $the_author = get_the_author() ?>
			<?php the_content(); ?> 
		</div>
	</div>
	<div class="related-content">  	 

			<div class="side-title">
			    <div class="side-title-txt">RELATED</div>
			    <div class="side-title-line"></div>
			</div>

		<?php
			 $orig_post = $post;  
		    global $post;  
		    $tags = wp_get_post_tags($post->ID);  
		      
		    if ($tags) {  
		    $tag_ids = array();  
		    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
		    $args=array(  
		    'tag__in' => $tag_ids,  
		    'post__not_in' => array($post->ID),  
		    'posts_per_page'=>4, // Number of related posts to display.  
		    'caller_get_posts'=>1  
		    );  
		      
		    $my_query = new wp_query( $args );  
		  
		    while( $my_query->have_posts() ) {  
		    $my_query->the_post(); ?>

		    <div class="related-post-wrapper">
				<div class="related-post">
					<div class="related-img-cat">
						<div class="related-cat-wrap">
							<div class="related-cat"><?php the_category( ', ' ); ?></div> 
						</div>
						<div class="related-img"><?php the_post_thumbnail();?></div> 
					</div>
					<div class="related-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div> 
				</div>
			</div> 


			<?php
			 	}
			}
			$post = $orig_post;
			wp_reset_query();
			?>
	</div> 
</div>
<div class="sidebar">
		<?php get_sidebar(); ?>
</div>

<?php if ( ! post_password_required() ) comments_template( '', false ); ?>
<?php endwhile; endif; ?>
<footer class="footer">




<?php //get_template_part( 'nav', 'below-single' ); ?>
<?php get_template_part ( 'footer' ); ?>
</footer>


</section>

