<?php
/**
 * @package DebutantPlugin
 */

namespace Inc\Base;

class Enqueue {
    public function register() {
        add_action ('admin_enqueue_scripts', array( $this, 'enqueue') );
    }

    function enqueue() {

        wp_enqueue_style( 'mycss', PLUGIN_URL . 'assets/mystyle.css' );
        wp_enqueue_script( 'myjs', PLUGIN_URL . 'assets/myscripts.js' );

    }
}
