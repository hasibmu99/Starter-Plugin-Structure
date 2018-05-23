<?php
/**
 * @package DebutantPlugin
 */
namespace Inc\Base;

class SettingsLinks {

    protected $plugin;

    public function __construct() {
        
        $this->plugin = PLUGIN;
    }

    public function register() {
        add_filter( "plugin_action_links_$this->plugin", array( $this, 'setting_links') );
    }

    public function setting_links( $links ) {
        $setting_link = '<a href="admin.php?page=debut_plugin">Settings</a>';

        array_push( $links , $setting_link);

        return $links;
    }
}