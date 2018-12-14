<?php
/*
Plugin Name: From Imperial To Metric Units Converter
Description: This plugin uses vanilla JavaScript to convert 3 imperial units to metric.
Version: 1.0.0
Author: Dávid Antal


*/

// Security function
defined('ABSPATH') or die("NO DIRECT ACCESS TO THIS FILE.");

// Register and load the widget
function ucw_load_widget() {
	register_widget( 'ucw_widget' );
}
add_action( 'widgets_init', 'ucw_load_widget' );

// Loading the class
require 'includes/class.php';





