<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green_Petal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalabe=0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site"  data-scroll-container>
	<header id="masthead" class="site-header">
		<div class="container">
			<nav class="site-navigation-nav">
				<div class="site-logo">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );						
					?>
					<a href="<?php echo home_url(); ?>" rel="home">
						<img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
						<span>Green Petal Bio-Sciences</span>
					</a>
				</div>
				<div class="site-navigation-wrap">
					<?php
					wp_nav_menu(
						array(
							'menu'	=> 'Primary Menu',
							'container' => 'ul',
							'menu_class' => 'site-navigation unstyled-list'
						)
					);
					?>
				</div>
				<button class="nav-toggler">
					
				</button>
			</nav>
		</div>		
	</header><!-- #masthead -->
