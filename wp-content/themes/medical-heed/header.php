<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Craft_Blog
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

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medical-heed' ); ?></a>

	<header id="masthead" class="site-header">
        <?php 
            $top_bar  = get_theme_mod('medical_heed_topbar','disable');
            $social   = get_theme_mod('medical_heed_social','enable');

        ?>
        <div class="header-all-wrapper">
        <div id="header-wrap" class="header-wrap">
            <div class="container ">
                <div class="row d-flex align-center medical-desktop">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
                    	<div class="header-logo site-branding">

                            <?php the_custom_logo(); ?>

                            <h1 class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                            </h1>

                            <?php 
                                $medical_heed_description = get_bloginfo( 'description', 'display' );
                                if ( $medical_heed_description || is_customize_preview() ) :?>
                                    <p class="site-description"><?php echo $medical_heed_description; /* WPCS: xss ok. */ ?></p>
                            <?php endif; ?>
                        </div> <!-- .site-branding -->
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <?php if ( !empty( $top_bar ) &&  $top_bar == 'enable' ) : ?>
                            <div class="nav__top">
                                <div class="row"> 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?php if ( !empty( $social ) && $social == 'enable') : ?>
                                            <ul class="social-link text-left pull-left">
                                                <?php  medical_heed_social(); ?>
                                            </ul>
                                        <?php endif; ?>
                                        <ul class="contact-item pull-right">
                                            <?php medical_heed_info(); ?>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <nav id="site-navigation" class="main-navigation nav-border-side">
                            <div class="nav__wrapper">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                ) );
                            ?>
                            <div class="main-nav-icons">
                                <div class="main-nav-search">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="side-info-button">
                                    <span><i class="fas fa-bars"></i></span>
                                </div>
                                <div class="search-pop-up widget_search">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        </div>
                        </nav><!-- #site-navigation -->
                    </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex m-d-flex align-center medical-mobile">
                    <nav id="site-navigation2" class="main-navigation nav-border-side">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle menu-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div><!-- Mobile navbar toggler -->
                        <div class="nav__wrapper">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                ) );
                            ?>
                        </div>
                    </nav><!-- #site-navigation -->

                    <div class="header-logo site-branding">
                        <?php the_custom_logo(); ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>

                        <?php 
                            $medical_heed_description = get_bloginfo( 'description', 'display' );
                            if ( $medical_heed_description || is_customize_preview() ) :?>
                                <p class="site-description"><?php echo $medical_heed_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div> <!-- .site-branding -->

                    <div class="main-nav-icons">
                        <div class="main-nav-search">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="side-info-button">
                            <span><i class="fas fa-bars"></i></span>
                        </div>
                        <div class="search-pop-up widget_search">
                            <?php get_search_form(); ?>
                        </div>
                    </div>


                    
                </div>

            </div>
            </div>
        </div><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div id="side-contact" class="side-info">

        <span class="closebtn">&times;</span>

        <div class="header-logo site-branding">

            <?php the_custom_logo(); ?>

            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>

            <?php 
                $medical_heed_description = get_bloginfo( 'description', 'display' );
                if ( $medical_heed_description || is_customize_preview() ) :?>
                    <p class="site-description"><?php echo $medical_heed_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
        </div> <!-- .site-branding -->

        <?php if (is_active_sidebar('popup-sidebar')) : ?>

            <div class="popup-sidebar widget-area">
                <?php dynamic_sidebar('popup-sidebar'); ?>
            </div>

        <?php endif; ?>
    </div><!--  End Sidebar Pop UP -->


    <?php 
        if( ! is_front_page() || ! is_home() ) {
           /**
            * medical_heed_breadcrumbs hook
            *
            * @since 1.0.0
            */
           do_action( 'medical_heed_action_breadcrumbs' );
        }
     ?>

<div id="content" class="site-content">
