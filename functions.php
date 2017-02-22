<?php 
/* ==========================================================================
   functions.php

   theme's functions
   ========================================================================== */
?>

<?php 
/* ==========================================================================
   1. CONSTANS
   ========================================================================== */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/img' );
define( 'JS', THEMEROOT . '/js' );

/* ==========================================================================
   2. THEME SETUP
   ========================================================================== */
if (! function_exists( 'foundstrap_theme_setup' ) ) {
	function foundstrap_theme_setup() {
		/* Make the theme availabe for translation. */
		$lang_dir = THEMEROOT . '/languages';
		load_theme_textdomain( 'foundstrap', $lang_dir );

		/* Add support for automatic feed links. */
		add_theme_support( 'automatic-feed-links' );

		/* Add support for post thumbnails. */
		add_theme_support( 'post-thumbnails' );

		/* Register nav menus. */
		register_nav_menus( array(
			'main-menu'	=> __( 'Main Menu', 'foundstrap' )
		) );
	}

	add_action( 'after_setup_theme', 'foundstrap_theme_setup' );
}
?>