<?php 

	function movein3_theme_support() {
    	add_theme_support( 'post-thumbnails' );
	}

	function main_menu() {
  		register_nav_menu('main_menu',__( 'Main Menu' ));
	}

	add_action( 'after_setup_theme', 'movein3_theme_support' );
	add_action( 'init', 'main_menu');
?>