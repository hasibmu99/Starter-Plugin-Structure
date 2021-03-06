<?php

/**
 * @package DebutantPlugin
 */

/*
Plugin Name: Debut Plugin
Pluign URI: http://shuvo.com/plugins/debut-plugin
Description: This is for fun purpose Plugin
Version: 1.0.0
Author: Hasib Muhammad
Author URI: http://shuvo.com
Text-Domain: debut-plugin
License: GPLv2 or later

*/

/*
This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
This is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with This. If not, see {URI to Plugin License}.

*/

// If this file is called illegally,get lost from here!
defined( 'ABSPATH' ) or die( 'Hey, What are you doing here, you silly man!' );

// Rqquire once the composer autoload mechanism
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ){
    require_once dirname( __FILE__ ) . '/vendor/autoload.php' ;
}

/**
 * This block of code is responsible for activation section
 */

function debut_activate_plugin() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'debut_activate_plugin');

/**
 * This block of code is responsible for Deactivation section
 */

function debut_deactivate_plugin() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'debut_deactivate_plugin');

/**
 * If Inside Inc Folder exist the class called Init
 * Then call the mentioned method to register new class.
 */
if ( class_exists( 'Inc\\Init' ) ){
    Inc\Init::register_services();
}