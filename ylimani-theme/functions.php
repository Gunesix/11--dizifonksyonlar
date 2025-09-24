<?php
/**
 * Ylimanı Theme functions
 *
 * @package ylimani
 */

// Enqueue editor styles to ensure fonts are loaded in editor as well
add_action('after_setup_theme', function () {
	add_theme_support('editor-styles');
	add_editor_style('style.css');
});

// Register a primary menu location for Navigation block fallback
add_action('after_setup_theme', function () {
	register_nav_menus([
		'primary' => __('Primary Menu', 'ylimani'),
	]);
});
