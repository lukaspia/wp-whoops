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
    public function registerErrorHandler(): void
    {
        if (!$this->isDebugModeEnabled()) {
            return;
        }

        $handler = ErrorHandlerFactory::create();
        $handler->registerErrorsHandler();
    }

    /**
     * @return bool
     */
    private function isDebugModeEnabled(): bool
    {
        if (!defined('WP_DEBUG') || !WP_DEBUG || !defined('WP_DEBUG_DISPLAY') || !WP_DEBUG_DISPLAY) {
            return false;
        }

        return true;
    }
}