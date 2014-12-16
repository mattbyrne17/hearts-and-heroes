<?php
/**
 * @package required
 * @since   1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<div id="wrapper" class="clearfix">

			<aside id="sidebar" class="animated fadeInLeft">

				<header id="masthead">

					<hgroup class="header_logo">
						<h1 class="site-title"><a href="#">Matthew Byrne</a></h1>
					</hgroup>

				</header><!-- /#masthead -->

				<nav id="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 1, ) ); ?>
				</nav><!-- /#navigation -->

		  	 <div class="bio-pic">
			 	<img src="<?php bloginfo('template_directory'); ?>/images/waves.png">
			 </div>

			</aside><!-- /#sidebar -->