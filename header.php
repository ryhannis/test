<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inventive_Ventures
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/mrw3vhf.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="barba-wrapper">
<div id="page" class="barba-container relative">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'inventive-ventures' ); ?></a>

	<header id="masthead" class="site-header absolute top-0 left-0 w-100 pa3 flex 
	ph4-l justify-between center fixed items-center">

		<a href="<?php echo get_site_url(); ?>" class="logo w-10-ns w-25 db">
         <img src="<?php bloginfo('template_directory'); ?>/images/inventive_ventures_logo_black.gif" class="db">
		</a>
		
		<a class="nav-toggle w-10 db">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 32"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Group_121" data-name="Group 121"><rect id="Rectangle_700" data-name="Rectangle 700" width="57" height="6"/><rect id="Rectangle_701" data-name="Rectangle 701" y="13" width="57" height="6"/><rect id="Rectangle_702" data-name="Rectangle 702" y="26" width="57" height="6"/></g></g></g></svg>
	</a>
		
	</header><!-- #masthead -->
		<nav id="site-navigation" class="main-navigation flex justify-between items-center relative">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'=> 'menu-nav center',
				)
			);
			?>
		

			<div class="nav-socials center absolute">
				<a href="https://instagram.com/inventive.ventures">
					<img src="<?php bloginfo('template_directory'); ?>/images/inventive-ventures_instagram_icon.svg">
				</a>
				<a href="https://facebook.com/inventive.ventures">
					<img src="<?php bloginfo('template_directory'); ?>/images/inventive-ventures_facebook_icon.svg">
				</a>
			</div>
			

	</nav><!-- #site-navigation -->

	

	