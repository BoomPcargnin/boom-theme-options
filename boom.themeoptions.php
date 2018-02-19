<?php
/*
Plugin Name: Boom Themes options
Plugin URI: http://www.boom.ink
Description: PLugin thatgives the power to the user! 
Version: 1.0
Author: Boom.ink di Paolo Cargnin
Author URI: http://www.boom.ink
*/

define( 'boomThemeOptionsUrl', plugins_url( 'courses-product-typologies', dirname( __FILE__ ) ) );
define( 'boomThemeOptionsDir', plugin_dir_path( dirname( __FILE__ ) ).'courses-product-typologies' );

@require( 'model/ThemeOption.php' );

@require( 'controller/boomthemeoptions.controller.php' );
function boomthemeoptionsload() {
  $BoomThemeOption = new BoomThemeOption();
	$BoomTheme = new BoomThemeOptionsController();
}

// add_action( 'admin_enqueue_scripts', 'style_admin_boom_bookable' );
// function style_admin_boom_bookable(){ //acrocchione veloce
//     wp_register_style('boomBookablestyle',  coursesTypologiesUrl.'/assets/styles/admin_helpers.css');
//     wp_enqueue_style('boomBookablestyle');
// }

add_action( 'plugins_loaded', 'boomthemeoptionsload' );
