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
			<h1 class="title recoleta-bold">Long-Lasting Electronics<span>.</span></h1>
		</div>
	</div>
	<div class="container w-50 d-flex justify-content-center align-items-center">
		<div class="col-md-12 pt-1 pb-1 justify-content-center align-items-center">

			<h6 id='main-text-field'>We stand against the prevailing culture of throwaway electronics. The innovative electricals we stock are ingeniously<br> designed to go the extra mile when it comes to longevity. From amazing modular headphones that can be repaired with<br> ease, to long-lasting LED lightbulbs in stunning designs, these electricals will just keep going and going whilst the<br> competition fizzles out!</h6>

		</div>

	</div>
	<!-- /*custom-body-*/ -->
	<div class="container pt-1 pb-1">
		<div class="row">
			<div class="col-6 d-flex">
				<h6 id='btn'><i class="bi bi-sliders"></i> Filter <i class="bi bi-chevron-right"></i> </h6>
			</div>
			<div class="col-6 d-flex justify-content-end">
				<h6 id='btn'>Featured <i class="bi bi-chevron-down"> </i></h6>
			</div>
		</div>
		<div class="section">
			<div class="col-12 pt-1 pb-1 d-flex justify-content-center">
				<p>
					<?php
				if (!function_exists('wc_get_products')) {
					return;
				}

				$paged                   = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
				//   $ordering                = WC()->query->get_catalog_ordering_args();
				//   $ordering['orderby']     = array_shift(explode(' ', $ordering['orderby']));
				//   $ordering['orderby']     = stristr($ordering['orderby'], 'price') ? 'meta_value_num' : $ordering['orderby'];
				//   $products_per_page       = apply_filters('loop_shop_per_page', wc_get_default_products_per_row() * wc_get_default_product_rows_per_page());

				$featured_products       = wc_get_products(
					array(
					'meta_key'             => '_price',
					'status'               => 'publish',
					// 'limit'                => $products_per_page,
					'limit'                => 18,
					'page'                 => $paged,
					'featured'             => false,
					'paginate'             => true,
					'return'               => 'ids',
					// 'orderby'              => $ordering['orderby'],
					// 'order'                => $ordering['order'],
				));

				wc_set_loop_prop('current_page', $paged);
				wc_set_loop_prop('is_paginated', wc_string_to_bool(true));
				wc_set_loop_prop('page_template', get_page_template_slug());
				//   wc_set_loop_prop('per_page', $products_per_page);
				wc_set_loop_prop('per_page', 18);
				wc_set_loop_prop('total', $featured_products->total);
				wc_set_loop_prop('total_pages', $featured_products->max_num_pages);

				if ($featured_products) {
					do_action('woocommerce_before_shop_loop');
					woocommerce_product_loop_start();
					foreach ($featured_products->products as $featured_product) {
						$post_object = get_post($featured_product);
						setup_postdata($GLOBALS['post'] = &$post_object);
						wc_get_template_part('content', 'product');
											/**
					 * debug
					 */
					global $product;

					// if (
					// 	get_post_type($post) === 'product' && !is_a($product, 'WC_Product')
					// ) {
					// 	$product = wc_get_product(get_the_id()); // Get the WC_Product Object
					// }

					// $product_attributes = $product->get_attributes(); // Get the product attributes

					// Raw output
					// echo '<pre>';
					// 	// (array_key_exists('pa_vendor', $product_attributes)));
					// echo '</pre>';
					/**
					 * end of debug
					 */
					}

					wp_reset_postdata();
					woocommerce_product_loop_end();
					do_action('woocommerce_after_shop_loop');
				} else {
					do_action('woocommerce_no_products_found');
				};
				?>

			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
//get_sidebar();
//get_footer();
