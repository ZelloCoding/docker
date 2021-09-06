<?php
/**
 * freightcenter Theme Customizer
 *
 * @package freightcenter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function freightcenter_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'freightcenter_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'freightcenter_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'freightcenter_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function freightcenter_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function freightcenter_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function freightcenter_customize_preview_js() {
	wp_enqueue_script( 'freightcenter-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'freightcenter_customize_preview_js' );

/**
 * Add light logo to customizer
 * @param $wp_customize
 */
function freightcenter_customizer_setting($wp_customize) {
// add a setting
    $wp_customize->add_setting('freightcenter_light_logo');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'freightcenter_light_logo', array(
        'label' => 'Upload Light Logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'freightcenter_light_logo',
        'priority' => 8 // show it just below the custom-logo
    )));
}

add_action('customize_register', 'freightcenter_customizer_setting');

/**
 * output the custom light logo
 */
function freightcenter_the_custom_light_logo(){
    $logo_url = get_theme_mod( 'freightcenter_light_logo' );
    $logo_id = attachment_url_to_postid( $logo_url );
    echo '<a href="'. site_url() .'">'.wp_get_attachment_image($logo_id, 'full').'</a>';
}
