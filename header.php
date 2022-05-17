<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woopress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woopress' ); ?></a>

<div class="announcement-bar">
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 d-flex justify-content-center align-content-center">
				<p>Free shipping on orders over £50🎉</p>
			</div>
			<div class="col-4 d-flex justify-content-end align-content-center">
				<a href="#"><p>Switch to U.S.</p></a>
			</div>
		</div>
	</div>
</div>




	<header id="masthead" class="site-header sticky-top bg-white">
		<div class="container">
			<div class="row d-flex align-items-center sticky-top">
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start">
					<?php the_custom_logo();?>
				</div>

				<div class="col-md-6 site-header__searchbar d-flex">
					<?php echo do_shortcode('[fibosearch]'); ?>
				</div>
				<div class="col cart d-flex justify-content-md-end justify-content-sm-center">
				<a href="#" class='me-4'>Account</a>	
				<a href="#" class=''>Basket</a>
				</div>
			</div>
		</div>


		<nav id="site-navigation" class="main-navigation">

			<div class="container-liquid pt-0 pb-0 d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list"></i>
							<?php esc_html_e( 'Primary Menu', 'woopress' ); ?>
						</button>
					</div>
					<div class="col-12 text-center">
								<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>

			</div>

		</nav>
		

	</header><!-- #masthead -->
