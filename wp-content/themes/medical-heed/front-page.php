<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Medical_Heed
 */

get_header(); 

    /**
     * Enable Front Page
    */
    do_action( 'medical_heed_enable_front_page' );

    $enable_front_page = get_theme_mod( 'medical_heed_front_page' ,false);

    if( $enable_front_page == 1 ) {

        /**
         * Hook -  medical_heed_action_slider 
         *
         * @hooked medical_heed_featured_slider - 20
        */
        do_action('medical_heed_action_slider');

        $medical_heed_homepage_sections = medical_heed_homepage_section();

        foreach ($medical_heed_homepage_sections as $medical_heed_homepage_section) {

            $medical_heed_homepage_section = str_replace('construction_light_', '', $medical_heed_homepage_section);
            $medical_heed_homepage_section = str_replace('_section', '', $medical_heed_homepage_section);

            do_action($medical_heed_homepage_section);
        }
    } 

get_footer();