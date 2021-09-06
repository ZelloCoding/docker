<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freightcenter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('fc-light'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="fc_site-header">
        <div class="fc_color-switch">
            <div class="fc_color-switch-container">
                <label class="switch"><input type="checkbox"  />    <div></div>
                </label>
            </div>
        </div>
        <div class="container fc_site-header-container">
            <div class="row">
                <div class="site-branding">
                    <div class="fc_custom-logo active"><?php the_custom_logo();?></div>
                    <div class="fc_custom-logo"><?php freightcenter_the_custom_light_logo();?></div>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'fc_top-menu',
                            'menu_class'      => 'fc_top-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
                <div class="fc_my-account">
                    <a class="btn-round primary" href="#">Account</a>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->
