<?php
/**
 * GDI Twentythirteen child theme functions and definitions
 */

/************* Custom Images *************/

add_image_size( 'my-img', 400, 400 ); // soft proportional crop mode
add_image_size( 'other-img', 200, 269, true ); // hard crop mode


/************* Nav Menus *************/

register_nav_menus( array(
	'footer-nav' => 'Footer Menu'
 ) );
 
 
/************* Sidebars *************/

register_sidebar(array(
	'name' => __( 'Header Widget Area' ),
	'id' => 'headerwidget',
	'description' => __( 'The header widget area.' ),
	'before_widget' => '<div id="%1$s" class="headerwidget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="headerwidgettitle">',
	'after_title' => '</h4>',
));

register_sidebar(array(
	'name' => __( 'About Sidebar' ),
	'id' => 'aboutsidebar',
	'description' => __( 'The About page sidebar.' ),
	'before_widget' => '<div id="%1$s" class="aboutsidebar %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="aboutsidebartitle">',
	'after_title' => '</h4>',
));

register_sidebar(array(
	'name' => __( 'Contact Sidebar' ),
	'id' => 'concactsidebar',
	'description' => __( 'The Contact page sidebar.' ),
	'before_widget' => '<div id="%1$s" class="contact3wsidebar %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="contactsidebartitle">',
	'after_title' => '</h4>',
));



?>