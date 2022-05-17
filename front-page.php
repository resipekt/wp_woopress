<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package woopress
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container d-flex justify-content-center">
		<div class="col-md-12 d-flex pt-3 pb-2 justify-content-center align-items-center">
			<h1 class="title">Long-Lasting Electronics<span>.</span></h1>
		</div>
	</div>
	<div class="container w-50 d-flex justify-content-center align-items-center">
		<div class="col-md-12 pt-1 pb-1 justify-content-center align-items-center">

			<h6 id='main-text-field'>We stand against the prevailing culture of throwaway electronics. The innovative electricals we stock are ingeniously<br> designed to go the extra mile when it comes to longevity. From amazing modular headphones that can be repaired with<br> ease, to long-lasting LED lightbulbs in stunning designs, these electricals will just keep going and going whilst the<br> competition fizzles out!</h6>

		</div>

	</div>
	<!-- /*custom-body-*/ -->
	<div class="container body-container">
		<div class="row pt-3 pb-3">
			<div class="col-6 d-flex">
				<h6 id='utility_left'><i class="bi bi-sliders"></i> Filter <i class="bi bi-chevron-right"></i> </h6>
			</div>
			<div class="col-6 d-flex justify-content-end">
				<h6 id='utility_right'>Featured <i class="bi bi-chevron-down"> </i></h6>
			</div>
		</div>
		<div class="row product_section">
			
				<!-- /**
				* WooCommerce Loop
				*/ -->
				<?php
				echo do_shortcode( '[products limit="18" columns="3" orderby="popularity" ]');

				


					// $args = array(
					// 	'post_type'=>'product',
					// 	'posts_per_page'=> 18,
					// 	'meta_query'=>array(
					// 		array(
					// 			'key'=>'pa_vendor',
					// 			'type'=>'CHAR',
					// 			'compare'=>'='
					// 		)
					// 	)
					// );
					// $query = new WP_Query($args);
					// while($query -> have_posts()): $query->the_post();
				?>

			
			

		</div>
	</div>
</main><!-- #main -->
<?php
//get_sidebar();
get_footer();