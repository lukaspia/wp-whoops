<?php

declare(strict_types=1);


namespace WpWhoops\Src\Controller;


use WpWhoops\Src\Handler\ErrorHandlerInterface;

if (!defined('ABSPATH')) {
    exit;
}

class ErrorHandlerController
{
    public function registerErrorHandler(ErrorHandlerInterface $errorHandler): void
    {
        if (WP_DEBUG && WP_DEBUG_DISPLAY) {
            $errorHandler->handleErrors();
        }
    }
}