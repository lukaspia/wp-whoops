<?php
/**
 * WP-Whoops
 *
 * @package     WP-Whoops
 * @author      Lukasz Piasny
 *
 * @wordpress-plugin
 * Plugin Name: WP-Whoops
 * Description: Wordpress plugin that add whoops error handler.
 * Version: 1.0.0
 * Requires at least: 6.8
 * Tested up to: 6.8.0
 * Requires PHP: 8.1.0
 * Author: Lukasz Piasny
 * Author URI: https://github.com/lukaspia/wp-whoops
 * Text Domain: wp-whoops
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WpWhoops')) {
    class WpWhoops
    {
        public function __construct()
        {

        }
    }
}