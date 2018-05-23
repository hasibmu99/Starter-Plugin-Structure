<?php
/**
 * @package DebutantPlugin
 */
namespace Inc\Base;


class Activate {
    public static function activate() {
        echo 'hellow world';
        flush_rewrite_rules();
    }
}