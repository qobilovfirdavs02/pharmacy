<?php
/**
 * Dynamic css
*/
if (! function_exists('construction_light_dynamic_css')){

	function medical_heed_dynamic_css(){
        $dynamic_color = "";
        $primary_color    = get_theme_mod('medical_heed_primary_color');
        $second_color    = get_theme_mod('medical_heed_second_color', '#17c2a4');
        if($primary_color){
            $dynamic_color = "

                .breadcrumb,
                .btn-wrapper .btn:hover,
                .widget_search .search-submit,
                .wpcf7 input[type=\"submit\"], .wpcf7 input[type=\"button\"],
                .booking_form .wpcf7 input[type=\"submit\"], .wpcf7 input[type=\"button\"],
                .services-wrap .read-more-icon,
                .facilities .box .service-icon,
                .promotion figure.medic-effect h2,
                .feature-box-inner,
                .btn.btn-primary,
                .side-info-button i,
                .main-nav-search i,
                button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"]{
                    background-color: {$primary_color};
                }

                .about-us h2:after,
                .flex-control-nav>li>a:hover, .flex-control-nav>li>a.flex-active,
                .btn.btn-primary:hover,
                .site-footer .widget h2.widget-title:before,
                .wpcf7 input[type=\"submit\"], .wpcf7 input[type=\"button\"],
                .booking_form .wpcf7 input[type=\"submit\"], .wpcf7 input[type=\"button\"],
                .btn.btn-primary,
                #comments h2.comments-title,
                button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"],
                button:hover, input[type=\"button\"]:hover, input[type=\"reset\"]:hover, input[type=\"submit\"]:hover{
                    border-color: {$primary_color};
                }
                
                .read-more-icon a,
                .btn.btn-primary:hover,
                .about-us h3,
                .main-navigation .current-menu-item a, .main-navigation a:hover, .menu-item-has-children:hover:after,
                .widget a:hover, .widget a:hover::before, .widget li:hover::before,
                .about-us ul li:before, .about-us ol li:before,
                a,
                .copyright ul li a:hover,
                #comments h2.comments-title,
                button:hover, input[type=\"button\"]:hover, input[type=\"reset\"]:hover, input[type=\"submit\"]:hover{
                    color: {$primary_color};
                }

                .accordion__item.active .accordion-header,
                .accordion-header:hover,
                .nav__top {
                    background-image: linear-gradient(to right, {$second_color}, {$primary_color});
                }
                .side-info{
                    background-image: linear-gradient(to top, {$second_color}, {$primary_color});
                }
                
                .accordion-header{
                    background-image: linear-gradient(to right, {$primary_color}, {$second_color});
                }



                a:hover, a:focus, a:active{
                    color: {$second_color};
                }

                .facilities .box:hover .service-icon{
                    background-color: {$second_color};
                }

            ";
        }
        
        
        wp_add_inline_style( 'medical-heed-style', $dynamic_color );
	}
}
add_action( 'wp_enqueue_scripts', 'medical_heed_dynamic_css', 99 );