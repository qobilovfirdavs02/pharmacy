<?php 
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer functions.
 */
require get_template_directory() . '/inc/customizer/customizer-function.php';

/**
 * Include Breadcrumbs.
 */
require get_template_directory() . '/inc/breadcrumbs/breadcrumbs.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {

	require get_template_directory() . '/inc/jetpack.php';
	
}

/**
 * Load Custom Welcome Admin Page.
 */
require get_template_directory() . '/inc/welcome/welcome.php';
require get_template_directory() . '/inc/dynamic-color.php';


require get_template_directory() . '/inc/register-patterns.php';


/**
 * Load in customizer upgrade to pro
*/
require get_template_directory() .'/inc/customizer/customizer-pro/class-customize.php';

