<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}




// Charger les scripts et styles du thème enfant
function foce_child_enqueue_scripts() {
    // Charger le CSS principal (généré depuis Sass)
    wp_enqueue_style(
        'theme-style', 
        get_stylesheet_directory_uri() . '/scss/main.css', // Chemin vers le fichier CSS
        array(), 
        '1.0' 
    );

    // Charger le CSS de SwiperJS
    wp_enqueue_style(
        'swiper-css',
        get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.css',
        array(),
        '10.0.0'
    );

    // Charger le fichier JS de SwiperJS
    wp_enqueue_script(
        'swiper-js',
        get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.js',
        array(),
        '10.0.0', 
        true 
    );

    // Charger le fichier JS de Skrollr
    wp_enqueue_script(
        'scrollr-js',
        'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js',
        array(),
        '',
        true 
    );

    // Charger le fichier JS principal
    wp_enqueue_script(
        'main-js', 
        get_stylesheet_directory_uri() . '/assets/main.js', // Chemin vers le fichier JS
        array(),
        '1.0',
        true 
    );
}
add_action('wp_enqueue_scripts', 'foce_child_enqueue_scripts');
