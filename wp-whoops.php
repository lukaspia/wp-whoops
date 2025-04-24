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
        private static ?WpWhoops $instance = null;

        public function __construct()
        {
            $this->loadFiles();
            $this->registerHooks();
        }

        public static function init(): self
        {
            if (self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function registerHooks(): void
        {
            add_action('init',
                function () {
                    $errorHandlerController = new \WpWhoops\Src\Controller\ErrorHandlerController();
                    $errorHandlerController->registerErrorHandler();
                }
            );
        }

        private function loadFiles(): void
        {
            require_once __DIR__ . '/vendor/autoload.php';
        }
    }

    /**
     * Run plugin
     */
    WpWhoops::init();
}