<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<?php wp_head(); ?>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/classie.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	</head>
	<body <?php body_class('cbp-spmenu-push'); ?>>
		<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<nav id="menu" role="navigation">
				<div id="search">
				<?php get_search_form(); ?>

				</div> 
				<div id="showLeftPush" class="navicon"></div>

				<?php

				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'nav',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left',
					'menu_id'         => 'cbp-spmenu-s1',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '%3$s',
					'depth'           => 0,
					'walker'          => ''
				);
				?>
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" >
				
				 <?php wp_nav_menu( $defaults ); ?> 
				</nav>
			</nav>

			

			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/global.js"></script>
		</header>
<div id="container"> 