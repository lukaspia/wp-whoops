<?php

declare(strict_types=1);


namespace WpWhoops\Factory;


use WpWhoops\Handler\ErrorHandlerInterface;
use WpWhoops\Handler\WhoopsErrorHandler;

if (!defined('ABSPATH')) {
    exit;
}

/**
 *
 */
class ErrorHandlerFactory
{
    /**
     * @return \WpWhoops\Handler\ErrorHandlerInterface
     */
    public static function create(): ErrorHandlerInterface
    {
        /**
         * Space for future implementation of different error handling strategies.
         */

        return new WhoopsErrorHandler();
    }
}