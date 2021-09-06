<?php
// Add Gutenberg blocks category
function fc_block_categories( $block_categories, $editor_context ) {

    if ( ! empty( $editor_context->post ) ) {
        array_unshift(
            $block_categories,
            array(
                'slug'  => 'fc-category',
                'title' => __( 'Freightcenter blocks', 'freightcenter' ),
                'icon'  => 'car',
            )
        );
    }
    return $block_categories;

}
add_filter( 'block_categories_all', 'fc_block_categories', 10, 2 );

add_action( 'acf/init', 'register_fc_blocks' );
function register_fc_blocks() {

    if ( function_exists( 'acf_register_block_type' ) ) {

        // Register Our Technology block
        acf_register_block_type( array(
            'name' 					=> 'welcoming',
            'title' 				=> __( 'Welcoming', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Welcoming.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'welcoming' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/welcoming.php',
            'enqueue_assets'        => function(){
                wp_enqueue_script('cascade-slider', get_template_directory_uri() . '/src/js/plugins/cascadeslider.js', array('jquery'), false, true);
                wp_enqueue_script('welcoming', get_template_directory_uri() . '/src/js/welcoming.js', array('cascade-slider'), false, true);
            }
        ));

        // Register Our Technology block
        acf_register_block_type( array(
            'name' 					=> 'technology',
            'title' 				=> __( 'Our Technology', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Our Technology.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'technology' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/our-technology.php',
            //'enqueue_style' 		=> get_template_directory_uri() . '/assets/dist/banner.css',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Who Choose block
        acf_register_block_type( array(
            'name' 					=> 'choose',
            'title' 				=> __( 'Who Choose', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Who Choose.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'choose' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/who-choose.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Shipping Solutions block
        acf_register_block_type( array(
            'name' 					=> 'solutions',
            'title' 				=> __( 'Shipping Solutions', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Shipping Solutions.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'solutions' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/shipping-solutions.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Get Started block
        acf_register_block_type( array(
            'name' 					=> 'getstarted',
            'title' 				=> __( 'Get Started', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Get Started.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'get', 'started' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/get-started.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Shipping Header block
        acf_register_block_type( array(
            'name' 					=> 'shipping-header',
            'title' 				=> __( 'Shipping Header', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Shipping Header.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'shipping', 'header' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/shipping-header.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Get Quote block
        acf_register_block_type( array(
            'name' 					=> 'get-quote',
            'title' 				=> __( 'Get Quote', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Get Quote.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'quote' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/get-quote.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Shipping Easy block
        acf_register_block_type( array(
            'name' 					=> 'shipping-easy',
            'title' 				=> __( 'Shipping Easy', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Shipping Easy.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'shipping', 'easy' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/shipping-easy.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register First Time block
        acf_register_block_type( array(
            'name' 					=> 'first-time',
            'title' 				=> __( 'First Time', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter First Time.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'First', 'Time' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/first-time.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

        // Register Services block
        acf_register_block_type( array(
            'name' 					=> 'services',
            'title' 				=> __( 'Services', 'freightcenter' ),
            'description' 			=> __( 'Freightcenter Services.', 'freightcenter' ),
            'category' 				=> 'fc-category',
            'icon'					=> 'admin-generic',
            'keywords'				=> array( 'services' ),
            'post_types'			=> array( 'page' ),
            'mode'					=> 'auto',
            'multiple'              => false,
            'render_template'		=> 'template-parts/blocks/services.php',
            //'enqueue_style' 		=> get_stylesheet_uri(),
        ));

    }
}