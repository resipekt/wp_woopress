<?php

/**
*@package woopress
*/
get_header(); ?>
    <div class="container">
        <div class="row">
            <!-- ?php get_template_part('sidebars/sidebar-left'); ?> -->
            <main class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

                <?php
                    // Only run on shop archive pages, not single products or other pages
                    if ( is_shop() || is_product_category() || is_product_tag() ) {
                        // Products per page
                        $per_page = 18;
                        if ( get_query_var( 'taxonomy' ) ) { // If on a product taxonomy archive (category or tag)
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => $per_page,
                                'paged' => get_query_var( 'paged' ),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => get_query_var( 'taxonomy' ),
                                        'field'    => 'slug',
                                        'terms'    => get_query_var( 'term' ),
                                    ),
                                ),
                            );
                        } else { // On main shop page
                            $args = array(
                                'post_type' => 'product',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => $per_page,
                                'paged' => get_query_var( 'paged' ),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => get_query_var( 'taxonomy' ),
                                        'field'    => 'slug',
                                        'terms'    => get_query_var( 'term' ),
                                    ),
                                ),
                            );
                        }
                        // Set the query
                        $products = new WP_Query( $args );
                        // Standard loop
                        if ( $products->have_posts() ) :
                            while ( $products->have_posts() ) : $products->the_post();
                                // Your new HTML markup goes here
                                ?>
                                <div class="col-xs-12 col-md-3">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <?php // more stuff here... markup, classes etc. ?>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    } else { // If not on archive page (cart, checkout, etc), do normal operations
                        woocommerce_content();
                    }
                ?>

            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>