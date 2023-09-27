<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);


include "inc/inc.vite.php";


function config_custom_logo() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme' , 'config_custom_logo' );

// Custom Menus
register_nav_menus( array(
    'header' => __( 'Pagrindine navigacija', 'neurology' ),
    'footer_navi' => __( 'Navigacija apačioje', 'neurology' ),
    'useful_links' => __( 'Naudingos nuorodos', 'neurology' ),
    'footer_contacts' => __( 'Kontaktai apačioje', 'neurology' ),
    'side_menu' => __( 'Šonins meniu puslapiuose', 'neurology' ),
) );





add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {
	register_sidebar(
		array(
            'name'          => __( 'Pirmas blokas' ),
            'id'            => 'sidebar-1',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
            'name'          => __( 'Antras blokas' ),
			'id'            => 'sidebar-2',
			'description'   => __( ' short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Trečias blokas' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Ketvirtas blockas' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Apie daktarą' ),
			'id'            => 'about-doctor',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Žemėlapis' ),
			'id'            => 'map',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Kotaktu forma' ),
			'id'            => 'contact-form',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Nuotrauka apačioje' ),
			'id'            => 'footer_img',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Svarbi informacija' ),
			'id'            => 'important_info',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
            'name'          => __( 'Apie daktarą' ),
			'id'            => 'about_doctor',
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}



