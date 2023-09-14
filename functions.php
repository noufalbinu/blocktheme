<?php
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook.
     */
    function myfirsttheme_setup() {
        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );
    
        // Enqueue editor styles.
        add_editor_style( 'editor-style.css' );
    }
    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array('style','script', ) );
add_theme_support( 'automatic-feed-links' );