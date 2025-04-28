<?php

declare(strict_types=1);


namespace WpWhoops\Controller;


use WpWhoops\Factory\ErrorHandlerFactory;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Controller responsible for registering error handlers in WordPress.
 * This class acts as a bridge between WordPress and the error handling system.
 */
class ErrorHandlerController
{
    /**
     * @return void
     */
    public function registerErrorHandler(): bool
    {
        if (!$this->isDebugModeEnabled()) {
            return false;
        }

        $handler = ErrorHandlerFactory::create();
        $handler->registerErrorsHandler();

        return true;
    }

    /**
     * @return bool
     */
    private function isDebugModeEnabled(): bool
    {
        return !(!defined('WP_DEBUG') || !WP_DEBUG || !defined('WP_DEBUG_DISPLAY') || !WP_DEBUG_DISPLAY);
    }
}