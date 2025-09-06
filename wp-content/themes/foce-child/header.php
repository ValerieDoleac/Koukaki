<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home"><?php bloginfo( 'name' ); ?></a>


		</nav><!-- #site-navigation -->
        <!-- Menu burger -->
        <div class="menu-burger-container">
            <button id="menu-burger" class="menu-toggle" aria-label="Menu">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </button>
        </div>

        <!-- Menu plein écran -->
        <div id="full-screen-menu" class="menu-hidden">
            <div class="menu">
                <div class="menu-content">
                    <ul>
                        <li class="menu-screen-title"><a href="#story">Histoire</a></li>
                        <li class="menu-screen-title"><a href="#characters">Personnages</a></li>
                        <li class="menu-screen-title"><a href="#place">Lieu</a></li>
                        <li class="menu-screen-title"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                </div>

                <div class="menu-footer">
                    <p>STUDIO KOUKAKI</p>
                </div>

                <!-- Ajout des fleurs, têtes de chat et logo -->
                <div class="menu-decorations">
                    <img class="menu-decoration fleur-screen-1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/orchid.png" alt="fleur-violette">
                    <img class="menu-decoration fleur-screen-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png" alt="fleur-blanche">
                    <img class="menu-decoration fleur-screen-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fleur-3.png" alt="fleur rose et orange">
                    <img class="menu-decoration fleur-screen-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fleur-4.png" alt="fleur étoile">
                    <img class="menu-decoration fleur-screen-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hibiscus.png" alt="fleur-orange">
                    <img class="menu-decoration chat-1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat-1.png" alt="chat-orange">
                    <img class="menu-decoration chat-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat-2.png" alt="chat-noir">
                    <img class="menu-decoration chat-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chat-3.png" alt="chat-violet">
                    <img class="menu-decoration logo-screen" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-screen.png" alt="logo">
                </div>
            </div>
        </div>
	</header><!-- #masthead -->
