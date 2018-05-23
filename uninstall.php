<?php

/**
 * @package DebutantPlugin
 */

if ( ! defined( 'WP_INSTALL_PLUGIN' ) ){
    die;
}

// clear database stored data
 
// $haystack = get_posts( [
//     'post_type'     => 'dulavai',
//     'numberposts'   => -1
// ] );

// foreach( $haystack as $data) {
//     wp_delete_post( $data->ID, true );
// }

// access database via SQL

global $wpdb;

$wpdb->query(" DELETE FROM wp_posts WHERE post_type = 'dulavai'" );
$wpdb->query(" DELETE FROM wp_postmeta WHERE post_id NOT IN ( SELECT id FROM wp_posts )" );
$wpdb->query( "DELETE FROM wp_term_relasionships WHERE object_id NOT IN ( SELECT id FROM wp_posts ) ");