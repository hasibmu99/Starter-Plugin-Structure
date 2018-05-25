<?php
/**
 * @package DebutantPlugin
 */
namespace Inc\Api\Callbacks;

use \Inc\Base\BaseController;

class AdminCallbacks extends BaseController {

    public function adminDashboard() {

        return require_once "$this->plugin_path/templates/admin.php" ;
    }

    public function widgetManager() {
        return require_once "$this->plugin_path/templates/widget.php" ;
    }

    public function cptManager(){
        return require_once "$this->plugin_path/templates/cpt.php" ;
    }

    public function taxonomyManager() {
        return require_once "$this->plugin_path/templates/taxonomy.php" ;
    }

}