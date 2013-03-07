<?php
/**
 * @author dogwin
 * @date	2013-03-07
 */
function dogwin_setup(){
	register_nav_menu( 'footer_Nav1', __( 'Footer Menu One', 'twentytwelve' ) );
	register_nav_menu( 'footer_Nav2', __( 'Footer Menu Two', 'twentytwelve' ) );
	register_nav_menu( 'footer_Nav3', __( 'Footer Menu Three', 'twentytwelve' ) );
	register_nav_menu( 'footer_Nav4', __( 'Footer Menu Four', 'twentytwelve' ) );
}
add_action( 'after_setup_theme', 'dogwin_setup',11 );
/*End the file functions.php*/
/*Location /themes/jade/functions.php*/