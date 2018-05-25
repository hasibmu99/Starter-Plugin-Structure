<?php
/**
 * @package DebutantPlugin
 */

namespace Inc\Pages;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use \Inc\Api\Callbacks\AdminCallbacks;



class Admin extends BaseController {

    public $settings;

    public $callbacks;
    
    public $pages = array();

    public $subpages = array();

    public function register() {

        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setPages();

        $this->setSubPages();

        $this->settings->addPages( $this->pages )->withSubPages()->addSubPages( $this->subpages )->register();
    }

    public function setPages() {

        $this->pages = [

            [
                'page_title'    => 'Debut Plugin',
                'menu_title'    => 'Debut',
                'capability'    => 'manage_options',
                'menu_slug'     => 'debut_plugin',
                'callback'      => array($this->callbacks, 'adminDashboard'),
                'icon_url'      => 'dashicons-admin-home',
                'position'      => 110
            ],
        ];
    }

    public function setSubPages() {
         $this->subpages = [
            [
                'parent_slug'   => 'debut_plugin',
                'page_title'    => 'Custom Post Type',
                'menu_title'    => 'CPT',
                'capability'    => 'manage_options',
                'menu_slug'     => 'debut_cpt',
                'callback'      => array( $this->callbacks, 'cptManager')
            ],
            [
                'parent_slug'   => 'debut_plugin',
                'page_title'    => 'Taxonomy',
                'menu_title'    => 'Taxonomy',
                'capability'    => 'manage_options',
                'menu_slug'     => 'debut_taxonomy',
                'callback'      => array( $this->callbacks, 'taxonomyManager')
            ],
            [
                'parent_slug'   => 'debut_plugin',
                'page_title'    => 'Custom Widgets',
                'menu_title'    => 'Widgets',
                'capability'    => 'manage_options',
                'menu_slug'     => 'debut_widget',
                'callback'      => array( $this->callbacks, 'widgetManager')
            ]
        ];
    }

}


