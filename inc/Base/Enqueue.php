<?php
/**
 * @package DebutantPlugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController {
    public function register() {
        add_action ('admin_enqueue_scripts', array( $this, 'enqueue') );
    }

    function enqueue() {

        wp_enqueue_style( 'mycss', $this->plugin_url . 'assets/mystyle.css' );
        wp_enqueue_script( 'myjs', $this->plugin_url . 'assets/myscripts.js' );

    }
}
