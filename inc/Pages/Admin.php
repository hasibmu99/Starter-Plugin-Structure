<?php
/**
 * @package DebutantPlugin
 */

namespace Inc\Pages;


class Admin {
    function __construct () {
        
    }

    public function register() {
        add_action( 'admin_menu', array( $this, 'add_admin_page' ) );
    }

    public function add_admin_page() {
        add_menu_page( 'Debut Plugin' , 'Debut-Plugin', 'manage_options', 'debut_plugin', array( $this, 'admin_index' ), 'dashicons-pressthis', 110 );
    }

    public function admin_index(){
        require_once PLUGIN_PATH . 'templates/admin.php' ;
    }

}


