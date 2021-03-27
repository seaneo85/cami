<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			
				<div id="sidebar-header-container">
					<?php get_sidebar('header'); ?>
				</div>

				<div id="inner-header" class="wrap cf">
				
					

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1 m-all t-2of3 d-2of3" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					
					
					
					
				</div>
				
					<p id="mobile-nav"><a href="#menu"><i class="fa fa-bars"></i> MENU</a></p>
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
								 'container' => false,                           // remove nav container
								 'container_class' => '',                 // class of container (should you choose to use it)
								 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
								 'menu_class' => 'nav top-nav cf wrap',               // adding custom nav class
								 'theme_location' => 'main-nav',                 // where it's located in the theme
								 'before' => '',                                 // before the menu
								   'after' => '',                                  // after the menu
								   'link_before' => '',                            // before each link
								   'link_after' => '',                             // after each link
								   'depth' => 0,                                   // limit the depth of the nav
								 'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
				
				<?php if( is_home() || is_front_page() ) :
					if ( has_post_thumbnail() ) { ?>
					
						<div id="hero">
						<?php echo get_the_post_thumbnail( $post_id, 'full' );?>
						<div id="description">
							<div class="wrap">
							<?php 
								$my_postid = 1;//This is page id or post id
								$content_post = get_post($my_postid);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								echo $content;

							?>
							</div>
						</div>
						</div>
					<?php }
				endif; ?>

			</header>
