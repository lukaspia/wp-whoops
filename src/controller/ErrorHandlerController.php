<?php

declare(strict_types=1);


namespace WpWhoops\Src\Controller;


use WpWhoops\Src\ErrorHandlerInterface;

if (!defined('ABSPATH')) {
    exit;
}

class ErrorHandlerController
{
    public function registerErrorHandler(ErrorHandlerInterface $errorHandler): void
    {
        $errorHandler->handleErrors();
    }
}