<?php
/**
 * @package DebutantPlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;

use \Inc\Api\SettingsApi;

class Admin extends BaseController {

    public $settings;
    public $pages = array();

    public function __construct() {
        
        $this->settings = new SettingsApi();

        $this->pages = [

            [
                'page_title'    => 'Whatever Plugin',
                'menu_title'    => 'Debut',
                'capability'    => 'manage_options',
                'menu_slug'     => 'whatever_plugin',
                'callback'      => function(){echo '<h1>Hello world</h1>' ;},
                'icon_url'      => 'dashicons-admin-home',
                'position'      => 110
            ],
            [
                'page_title'    => 'Test Plugin',
                'menu_title'    => 'Test',
                'capability'    => 'manage_options',
                'menu_slug'     => 'test_plugin',
                'callback'      => function(){echo '<h1>Test page</h1>' ;},
                'icon_url'      => 'dashicons-store',
                'position'      => 111
            ]
            
        ];
    }

    public function register() {
        $this->settings->addPages( $this->pages )->register();
    }

}


