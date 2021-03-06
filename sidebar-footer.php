<?php
/**
 * The Evolution Framework.
 * 
 * Template: sidebar-footer.php
 *
 * WARNING: This file is part of the core Evolution Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Evolution\Templates\
 * @author  Andreas Hecht
 * @license GPL-2.0+
 * @link https://andreas-hecht.com/wordpress-themes/evolution-wordpress-framework/
 */
if (   ! is_active_sidebar( 'footer-1' )
    && ! is_active_sidebar( 'footer-2' )
    && ! is_active_sidebar( 'footer-3' )
    && ! is_active_sidebar( 'footer-4' ) ) {
    return;
}
/**
 * Functions hooked in the 'evolution_do_footer_sidebar' action
 * 
 * @return footer widget areas
 * 
 * @see /inc/structure/markup/evolution-sidebars.php
 *
 * @hooked  evolution_footer_sidebar() 
 */
do_action( 'evolution_do_footer_sidebar' );
